@extends('layout')

@section('content')
@foreach ($posts as $post)
            <article>
            <h1>
                <a href="posts/{{$post->id}}">
                    {!!$post->title!!}
                </a>
            </h1>

            <a href="categories/{{$post->category->slug}}">{{$post->category->name}}</a>

            <div>{{$post->excerpt}}</div>
            </article>
        @endforeach
@endsection('content')
