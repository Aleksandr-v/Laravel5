@extends('app')

@section('content')
    @foreach($articles as $article)
       <a href="{{url('/articles', $article->id)}}"> <h1>{{ $article->title }}</h1> </a>
        <p>{{ $article->body }}</p>
        <p>{{ $article->published_at }}</p>
        <hr />

    @endforeach
@endsection
