<?php

namespace App\Http\Controllers\Front;

use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
use App\Test;
use App\Trainer;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::select('id', 'small_desc', 'category_id', 'trainer_id', 'price', 'img', 'name')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        $data['courses_count'] = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();

        $data['tests'] = Test::all();
        // dd($data['courses']);
        return view('front.index')->with($data);
    }
}
