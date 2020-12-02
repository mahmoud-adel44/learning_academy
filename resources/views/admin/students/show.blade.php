@extends('admin.layout')

<div class="py-5">
@section('content')
<div class="py-4">
  <div class="row">
    <div class="m-auto">

  <h1 style="color: orange">All Courses for {{$student->name}}</h1>
  <a href="{{route('admins.students.add' , $student->id)}}" class="button  btn_1 d-flex text-align-center justify-content-center">Add {{$student->name}} to Course</a>
    </div>
</div>
</div>

  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr class="text-center">
          <th scope="col">#</th>

          <th scope="col">Course Name</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>



        </tr>
      </thead>


      <tbody>
        @foreach ($courses as $c)
        <tr class="text-center">
          <th class="bg-warning" scope="row">{{$loop->iteration}}</th>

          <td  class="bg-warning mt-3">{{$c->name}}</td>
          <td  class="bg-warning">{{$c->pivot->status}}</td>
          {{-- <td  class="bg-warning">{{$s->spec}}</td> --}}
          <td class="bg-warning">
            {{-- <a href="route{{('admins.students.edit' , $s->id)}}" class="btn btn-md btn-info">Edit</a> --}}
            @if ($c->pivot->status !== 'approve' )
            <a href="{{route('admins.students.approve' , [$student->id , $c->id])}}" class="btn btn-md btn-info">Approve</a>
            @endif
            @if ($c->pivot->status !== 'reject')
            <a href="{{route('admins.students.reject' , [$student->id , $c->id])}}" class="btn btn-md btn-danger">Reject</a>
            @endif
          </td>
        </tr>
        @endforeach


      </tbody>
    </table>
  </div>

@endsection
</div>
