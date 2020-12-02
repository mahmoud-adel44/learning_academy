@extends('admin.layout')

<div class="py-5">
@section('content')
<div class="py-4">
  <div class="row">
    <div class="m-auto">
      
  <h1 style="color: orange">All Students</h1>
  <a href="{{route('admins.students.create')}}" class="button button-contactForm btn_1">Add New Student</a>
    </div>
</div>
</div>

  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr class="text-center">
          <th scope="col">#</th>
  
          <th scope="col">Name</th>
          <th scope="col">email</th>
          <th scope="col">Speciality</th>
          <th scope="col">Actions</th>
          
          
        </tr>
      </thead>


      <tbody>
        @foreach ($students as $s)
        <tr class="text-center">
          <th class="bg-warning" scope="row">{{$loop->iteration}}</th>
        
          <td  class="bg-warning mt-3">{{$s->name}}</td>
          <td  class="bg-warning">{{$s->email}}</td>
          <td  class="bg-warning">{{$s->spec}}</td>
          <td class="bg-warning">
            <a href="{{route('admins.students.edit' , $s->id)}}" class="btn btn-md btn-info">Edit</a>
            <a href="{{route('admins.students.show' , $s->id)}}" class="btn btn-md btn-success">Show Courses</a>
            <a href="{{route('admins.students.delete' , $s->id)}}" class="btn btn-md btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach


      </tbody>
    </table>
  </div>

@endsection
</div>