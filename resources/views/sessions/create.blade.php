@extends('master')

@section('content')
   <h1>Login</h1>
   <form action="/login" method="POST">
   
    {{ csrf_field() }}

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
    
    @include('templates.errors')
   </form>
@endsection