@extends('layouts.phuler')
@section('content')
    <h2>{{$post->title}}</h2>
    <h3>Комментарий:</h3>
    @foreach($post->comments as $comment)
        @include('comment')
    @endforeach
@endsection
