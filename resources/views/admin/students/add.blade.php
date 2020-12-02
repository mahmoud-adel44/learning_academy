@extends('admin.layout')

<div class="py-5">
@section('content')
<h1 class="text-center pt-5" style="color: orange">Add to course</h1>
<div class="container py-5">
  @include('admin.inc.errors')
<form class="form-contact contact_form" action="{{route('admins.students.storeAdd', $student_id)}}" method="post" id="contactForm" novalidate="novalidate" >
  @csrf
  <input type="hidden" name="id" value="{{$student_id}}">

  <div class="row">


        <div class="col-sm-12 mb-4">
            <select class="form-control" name="course_id">
              @foreach ($courses as $course)
                <option value="{{$course->id}}">{{$course->name}}</option>
              @endforeach
            </select>
          </div>




  </div>
  <div class="form-group mt-3">
    <button type="submit" class="button button-contactForm btn_1">Add</button>
    <a href="{{route('admins.students.index')}}" class="button button-contactForm btn_1"> <<<-Back </a>

  </div>
</form>

</div>
@endsection
</div>
