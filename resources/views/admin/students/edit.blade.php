@extends('admin.layout')

<div class="py-5">
@section('content')
<h1 class="text-center pt-5" style="color: orange">student / Edit / {{$student->name}}</h1>
<div class="container py-5">
  <form class="form-contact contact_form" action="{{route('admins.students.update')}}" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$student->id}}">
  <div class="row">
    
    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your category name'" placeholder = 'Enter your category name' value="{{$student->name}}">
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="email" id="name" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" placeholder = 'Enter your email' value="{{$student->email}}">
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="spec" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Speciality'" placeholder = 'Enter your Speciality' value="{{$student->spec}}">
      </div>
    </div>




  </div>
  <div class="form-group mt-3">
    <button type="submit" class="button button-contactForm btn_1">Update</button>
    <a href="{{route('admins.students.index')}}" class="button button-contactForm btn_1"> <<<-Back </a>
    
  </div>
</form>

</div>
@endsection
</div>
