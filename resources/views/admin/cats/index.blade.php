@extends('admin.layout')

<div class="py-5">
@section('content')
<div class="py-4">
  <div class="row">
    <div class="m-auto">
      
  <h1 style="color: orange">Categories</h1>
  <a href="{{route('admins.cat.create')}}" class="button button-contactForm btn_1">Add New Category</a>
    </div>
</div>
</div>

  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Actions</th>
          
          
        </tr>
      </thead>


      <tbody>
        @foreach ($cats as $cat)
        <tr>
          <th class="bg-warning" scope="row">{{$loop->iteration}}</th>
          <td  class="bg-warning">{{$cat->name}}</td>
          <td class="bg-warning">
            <a href="{{route('admins.cat.edit' , $cat->id)}}" class="btn btn-sm btn-info">Edit</a>
            <a href="{{route('admins.cat.delete' , $cat->id)}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach


      </tbody>
    </table>
  </div>

@endsection
</div>