<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Message;
use App\Newsletter;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function newslettter(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        Newsletter::create([
            'email' => $request->email
        ]);

        return back();
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Message::create($data);

        return back();
    }


    public function enroll(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|email',
            'spec' => 'required|string',
            'course_id' => 'required|exists:courses,id',
        ]);

        $old_student = Student::select('id')->where('email', $data['email'])->first();

        if ($old_student == null) {
            $sudent =  Student::create([
                'name' => $request->name,
                'email' => $request->email,
                'spec' => $request->spec,
            ]);

            $student_id = $sudent->id;
        } else {
            $student_id = $old_student->id;
        }


        // dd($sudent->id);

        DB::table('course_student')->insert([
            'course_id' => $request->course_id,
            'student_id' => $student_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back();
    }
}
