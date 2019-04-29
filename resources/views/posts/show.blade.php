@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">

    <small>Written on {{$post->created_at}}</small>
    <div>
        {{$post->auteur}}
    </div>
    <div>
        {{$post->country}}
    </div>
    <div>
        {{$post->city}}
    </div>
    <div>
        {{$post->postalCode}}
    </div>
    <div>
        {{$post->departure}}
    </div>
    <div>
        {{$post->arrive}}
    </div>

    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>


    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
