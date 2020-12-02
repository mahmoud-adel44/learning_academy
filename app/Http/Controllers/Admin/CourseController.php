<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Trainer;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::select('id', 'name',  'price', 'img')->orderBy('id', 'DESC')->get();
        return view('admin.courses.index')->with($data);
    }

    public function create()
    {
        $data['cats'] = Category::select('id', 'name')->get();
        $data['trainers'] = Trainer::select('id', 'name')->get();
        return view('admin.courses.create')->with($data);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:191',
            'desc' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'trainer_id' => 'required|exists:trainers,id',
            'img' => 'required|image',
        ]);

        // $new_name = $data['img']->hashName();
        $new_name = $request->img->hashName();
        Image::make($request->img)->resize(970, 520)->save(public_path('uploads/courses/' . $new_name));
        $data['img'] = $new_name;
        // dd($new_name);

        Course::create($data);

        return redirect(route('admins.courses.index'));
    }



    public function edit($id)
    {
        $data['cats'] = Category::select('id', 'name')->get();
        $data['trainers'] = Trainer::select('id', 'name')->get();
        $data['course'] = Course::findOrFail($id);

        return view('admin.courses.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:191',
            'desc' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'trainer_id' => 'required|exists:trainers,id',
            'img' => 'nullable|image',
        ]);

        // dd($request->category_id);
        $old_name = Course::findOrFail($request->id)->img;

        // dd($request->hasFile('img'));

        if ($request->hasFile('img')) {
            Storage::disk('uploads')->delete('courses/' . $old_name);

            $new_name = $request->img->hashName();
            Image::make($request->img)->resize(970, 520)->save(public_path('uploads/courses/' . $new_name));
            $data['img'] = $new_name;
        } else {
            $data['img'] = $old_name;
        }


        Course::findOrFail($request->id)->update([
            'name' => $request->name,
            'small_desc' => $request->small_desc,
            'desc' => $request->desc,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'trainer_id' => $request->trainer_id,
            'img' => $data['img'],
        ]);

        return back();
    }

    public function delete($id)
    {
        // $old_name = Course::findOrFail($id)->img;
        // Storage::disk('uploads')->delete('courses/' . $old_name);
        $trainer = Course::findOrFail($id);
        // dd($trainer);
        if ($trainer->img !== null) {
            unlink(\public_path('uploads/courses/') . $trainer->img);
        }
        $trainer->delete();
        // Course::findOrFail($id)->delete();
        return back();
    }
}
