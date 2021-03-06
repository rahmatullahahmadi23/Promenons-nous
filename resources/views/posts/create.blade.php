<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
<div class="container">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Promenons-nous dans les bois</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Style -->
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" />

    </head>

    <h1>New promenade</h1>
    {{ Form::open(['action' => 'PostsController@store', 'method' => 'Post', 'enctype' => 'multipart/form-data']) }}
        <div class="form-group">
            {{form::label('title', 'Title')}}
            {{form::text('title', '',['class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('auteur', 'Auteur')}}
            {{form::text('auteur', '',[ 'class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('country', 'Country')}}
            {{form::text('country', '',[ 'class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('city', 'City')}}
            {{form::text('city', '',[ 'class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('postalCode', 'PostalCode')}}
            {{form::text('postalCode', '',[ 'class'=> 'form-control','placeholder'=> 'Example: 1200'])}}
        </div>
        <div class="form-group">
            {{form::label('departure', 'Departure')}}
            {{form::text('departure', '',[ 'class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('arrive', 'Arrive')}}
            {{form::text('arrive', '',[ 'class'=> 'form-control','placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{form::label('body', 'Body')}}
            {{form::textarea('body', '',[ 'class'=> 'form-control','placeholder'=> ''])}}
        </div>
       <div class="form-group">
           {{form::file('cover_image')}}
       </div>

        {{form::submit('Submit',['class'=>'btn btn-primary'])}}

    {{ Form::close()}}

@endsection
    </div>
