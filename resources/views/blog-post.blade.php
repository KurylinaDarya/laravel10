@extends('layouts.phuler')
@section('content')
    <div class="blog-content">
        <h2>{{$post->title}}</h2>
        <div class="blog-date-categori">
            <ul>
                <li>{{$post->published_date}}</li>
            </ul>
        </div>
        <p>{{$post->content}}</p>
    </div>
    <h3>Комментарий:</h3>
    @foreach($post->comments as $comment)
        @include('comment')
    @endforeach
@endsection
