@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {{ Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'Post', 'enctype' => 'multipart/form-data']) }}
        <div class="form-group">
            {{form::label('title', 'Title')}}
            {{form::text('title', $post->title,['class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('auteur', 'Auteur')}}
            {{form::text('auteur', $post->auteur,['class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('country', 'Country')}}
            {{form::text('country', $post->country,['class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('city', 'City')}}
            {{form::text('city', $post->city,['class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('postalCode', 'PostalCode')}}
            {{form::text('postalCode', $post->postalCode,['class'=> 'form-control','placeholder'=> 'exp: 1200'])}}
        </div>
        <div class="form-group">
            {{form::label('departure', 'Departure')}}
            {{form::text('departure', $post->departure,['class'=> 'form-control','placeholder'=> '', 'enctype' => 'multipart/form-data'])}}
        </div>
        <div class="form-group">
            {{form::label('arrive', 'Arrive')}}
            {{form::text('arrive', $post->arrive,['class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::file('cover_image')}}
        </div>
        {{form::hidden('_method', 'PUT')}}
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}

    {{ Form::close()}}

@endsection
