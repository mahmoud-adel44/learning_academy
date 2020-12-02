@extends('admin.layout')

<div class="py-5">
@section('content')
<h1 class="text-center pt-5" style="color: orange">Trainer / Edit / {{$trainer->name}}</h1>
<div class="container py-5">
  <form class="form-contact contact_form" action="{{route('admins.trainers.update')}}" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$trainer->id}}">
  <div class="row">
    
    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your category name'" placeholder = 'Enter your category name' value="{{$trainer->name}}">
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="phone" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone'" placeholder = 'Enter your phone' value="{{$trainer->phone}}">
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
        <input class="form-control" name="spec" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Speciality'" placeholder = 'Enter your Speciality' value="{{$trainer->spec}}">
      </div>
    </div>


    <div class="col-sm-12">
      <div class="form-group">
        <img src="{{asset('uploads/trainers/' . $trainer->img)}}" height="100px" class="my-3">
        <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </div>

  </div>
  <div class="form-group mt-3">
    <button type="submit" class="button button-contactForm btn_1">Update</button>
    <a href="{{route('admins.cat.index')}}" class="button button-contactForm btn_1"> <<<-Back </a>
    
  </div>
</form>

</div>
@endsection
</div>
