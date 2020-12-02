@extends('admin.layout')

<div class="py-5">
@section('content')
<h1 class="text-center pt-5" style="color: orange">Add New Category</h1>
<div class="container py-5">
  @include('admin.inc.errors')
<form class="form-contact contact_form" action="{{route('admins.trainers.store')}}" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
  @csrf
  <div class="row">
    
    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your category name'" placeholder = 'Enter your category name'>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="phone" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone'" placeholder = 'Enter your phone'>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="spec" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Speciality'" placeholder = 'Enter your Speciality'>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
        <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </div>

  </div>
  <div class="form-group mt-3">
    <button type="submit" class="button button-contactForm btn_1">Add</button>
    <a href="{{route('admins.trainers.index')}}" class="button button-contactForm btn_1"> <<<-Back </a>
    
  </div>
</form>

</div>
@endsection
</div>
