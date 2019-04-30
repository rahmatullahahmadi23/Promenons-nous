<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
<div class="container">
    <a href="/posts" class="btn btn-primary">Go back</a>
    <div class="text-center">
        <h1>{{$post->title}}</h1>
    </div>
    <div class="row">
    <div class="rounded float-left">
        <img class="col-4" src="/storage/cover_images/{{$post->cover_image}}">
    </div>
    <div class="col">
        <small>Written on {{$post->created_at}}</small>
    </div>
    <div class="col">
        {{$post->auteur}}
    </div>
    <div class="col">
        {{$post->country}}
    </div>
    <div class="col">
        {{$post->city}}
    </div>
    <div class="col">
        {{$post->postalCode}}
    </div>
    <div class="col">
        {{$post->departure}}
    </div>
    <div class="col">
        {{$post->arrive}}
    </div>
</div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>


    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
</div>
