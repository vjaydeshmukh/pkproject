@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <small>Wrriten on {{$post->created_at}}</small>

@endsection