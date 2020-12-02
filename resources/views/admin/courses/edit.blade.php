@extends('admin.layout')

<div class="py-5">
@section('content')
<h1 class="text-center pt-5" style="color: orange">Trainer / Edit / {{$course->name}}</h1>
<div class="container py-5">
  <div class="border border-warning p-4">
    @include('admin.inc.errors')
  <form class="form-contact contact_form" action="{{route('admins.courses.update')}}" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$course->id}}">
    <div class="row">
      
      <div class="col-sm-12">
        <div class="form-group">
          <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your category name'" placeholder = 'Enter your course name' value="{{$course->name}}">
        </div>
      </div>
  
      <div class="col-sm-12">
        <div class="form-group">
          <input class="form-control" name="small_desc" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Small Desc'" placeholder = 'Enter Small Desc' value="{{$course->small_desc}}">
        </div>
      </div>
  
      <div class="col-sm-12">
        <div class="form-group">
          <textarea name="desc" class="form-control" id="name"  cols="30" rows="10"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Desc'" placeholder = 'Enter Desc'>{{$course->desc}}</textarea>
        </div>
      </div>
  
      <div class="col-sm-12 mt-4">
        <div class="form-group">
          <input class="form-control" name="price" id="name" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter price'" placeholder = 'Enter price' value="{{$course->price}}">
        </div>
      </div>


      <div class="col-sm-12 mb-4">
        <select class="form-control" name="category_id">
          @foreach ($cats as $cat)
            <option value="{{$cat->id}}" @if ($course->category_id == $cat->id)
                selected
            @endif>{{$cat->name}}</option>    
          @endforeach
          
        </select>
      </div>
  
      <div class="col-sm-12 mb-4">
        <select class="form-control" name="trainer_id">
          @foreach ($trainers as $tra)
          <option value="{{$tra->id}}" @if ($course->trainer_id == $tra->id)
            selected
        @endif>{{$tra->name}}</option>    
        @endforeach
        </select>
      </div>
  
      <div class="col-sm-12">
        <div class="form-group">
          <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
        </div>
      </div>
  
    </div>
    <div class="form-group mt-3">
      <button type="submit" class="button button-contactForm btn_1">Add</button>
      <a href="{{route('admins.courses.index')}}" class="button button-contactForm btn_1"> <<<-Back </a>
      
    </div>
  </form>
  </div>

</div>
@endsection
</div>
