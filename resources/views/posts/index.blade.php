@extends('master')

@section('content')
  @foreach($posts as $post)
    <a href="posts\{{ $post->id }}"><h1>{{$post->title}}</h1></a>
    <small>{{ $post->user->name }} {{ $post->date() }}</small><br>
    {{ $post->content }}
  @endforeach
@endsection