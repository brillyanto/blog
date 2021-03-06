@extends('master')

@section('content')
   <h1>{{ $post->title }}</h1> 
   {{ $post->user->name }} on {{ $post->date() }} <br>
   {{ $post->content }}
   @if(count($post->comments))
   <ul class="list-group">
       @foreach($post->comments as $comment)
       <li class="list-group-item"><strong>{{ $comment->created_at->diffForHumans() }}:</strong> {{ $comment->body }} </li>
       @endforeach
   </ul>
   @endif
@endsection