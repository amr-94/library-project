


@extends('master')

@section('content')

 <h2>Log In</h2>

    <form method="POST" action="login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>

  @if (Auth::check())
       <a href="{{asset('register')}}" style="color:white">
           <button style="cursor:pointer" type="submit" class="btn btn-primary"> register </a></button>
                       @endif
</div>
@if ($errors->any())
<div class="form-group">
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endif
    </form>



@endsection
