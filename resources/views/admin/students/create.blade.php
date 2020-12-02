@extends('admin.layout')

<div class="py-5">
@section('content')
<h1 class="text-center pt-5" style="color: orange">Add New Student</h1>
<div class="container py-5">
  @include('admin.inc.errors')
<form class="form-contact contact_form" action="{{route('admins.students.store')}}" method="post" id="contactForm" novalidate="novalidate" >
  @csrf
  <div class="row">
    
    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter name'" placeholder = 'Enter  name'>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="email" id="name" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder = 'Enter email'>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="spec" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Speciality'" placeholder = 'Enter  Speciality'>
      </div>
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
