@extends('admin.layout')

<div class="py-5">
@section('content')
<div class="py-4">
  <div class="row">
    <div class="m-auto">
      
  <h1 style="color: orange">All Trainers</h1>
  <a href="{{route('admins.trainers.create')}}" class="button button-contactForm btn_1">Add New Trainers</a>
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
          <th scope="col">phone</th>
          <th scope="col">Speciality</th>
          <th scope="col">Actions</th>
          
          
        </tr>
      </thead>


      <tbody>
        @foreach ($trainers as $train)
        <tr class="text-center">
          <th class="bg-warning" scope="row">{{$loop->iteration}}</th>
          <td  class="bg-warning">
            <img class="rounded-circle" src="{{asset('uploads/trainers/' . $train->img)}}" alt="">
          </td>
          <td  class="bg-warning mt-3">{{$train->name}}</td>
          <td  class="bg-warning">{{$train->phone}}</td>
          <td  class="bg-warning">{{$train->spec}}</td>
          <td class="bg-warning">
            <a href="{{route('admins.trainers.edit' , $train->id)}}" class="btn btn-md btn-info">Edit</a>
            <a href="{{route('admins.trainers.delete' , $train->id)}}" class="btn btn-md btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach


      </tbody>
    </table>
  </div>

@endsection
</div>