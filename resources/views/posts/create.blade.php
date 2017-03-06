@extends('master')

@section('content')
   <h1>Create post</h1>
   <form action="/posts" method="POST">
   
    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="body">Body</label>  
        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
    @include('templates.errors')
   </form>
@endsection