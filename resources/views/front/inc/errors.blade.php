@if ($errors->any())
    <ul class="alert alert-danger list-unstyled mt-2">
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach

    </ul>
@endif