<?php

namespace App\Http\Controllers\Front;

use App\Course;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{

    public function cat($id)
    {
        $data['cat'] = Category::findOrFail($id);
        // dd($data['cat']);
        $data['courses'] = Course::where('category_id', $id)->paginate(3);

        return view('front.courses.cat')->with($data);
    }

    public function show($id, $c_id)
    {
        $data['course'] = Course::findOrFail($c_id);

        return view('front.courses.show')->with($data);
    }

    public function getCourses()
    {
        $data['allcourses'] = Course::get();

        return view('front.courses.allCourses')->with($data);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $courses = Course::with('category')->where('name', 'LIKE', "%$keyword%");
        return response()->json($courses);
    }
}
