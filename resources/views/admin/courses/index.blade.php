@extends('admin.layout')

<div class="py-5">
@section('content')
<div class="py-4">
  <div class="row">
    <div class="m-auto">
      
  <h1 style="color: orange">All courses</h1>
  <a href="{{route('admins.courses.create')}}" class="button button-contactForm btn_1">Add New courses</a>
    </div>
</div>
</div>

  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">img</th>
          <th scope="col">Name</th>
          <th scope="col">price</th>
          <th scope="col">Actions</th>
          
          
        </tr>
      </thead>


      <tbody>
        @foreach ($courses as $c)
        <tr class="text-center">
          <th class="bg-warning" scope="row">{{$loop->iteration}}</th>
          <td  class="bg-warning">
            <img  src="{{asset('uploads/courses/' . $c->img)}}" height="50px" alt="">
          </td>
          <td  class="bg-warning mt-3">{{$c->name}}</td>
          <td  class="bg-warning">$ {{$c->price}}</td>
          <td class="bg-warning">
            <a href="{{route('admins.courses.edit' , $c->id)}}" class="btn btn-md btn-info">Edit</a>
            <a href="{{route('admins.courses.delete' , $c->id)}}" class="btn btn-md btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach


      </tbody>
    </table>
  </div>

@endsection
</div>