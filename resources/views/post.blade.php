@extends('layout')

@section('content')

      <article>
         <h1>{{$post->title}}</h1>
         <div>{!!$post->body!!}</div>
         <a href="categories/{{$post->category->slug}}">{{$post->category->name}}</a>
      </article>

      <a href="/">Go Back</a>

@endsection('content')