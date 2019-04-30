@extends('layouts.app')

@section('content')

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Promenons-nous dans les bois</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Style -->
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" />

    </head>

<div class="container">
        <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Promenade</th>
                    <th scope="col">Description</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></td>
                    <td><h1>{{$post->title}}</h1>
                        <h6>Publié le {{$post->created_at}} par {{$post->auteur}}</h6>
                    <h4>Ville: {{$post->city}} ({{$post->country}})</h4>
                    <h4>Code postale: {{$post->postalCode}}</h4>
                    <h4>Départ de :{{$post->departure}} - Arrivée à :{{$post->arrive}}</h4>
                    <h4>Description: {{$post->body}}</h4>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                        <td><a href="/posts" class="btn btn-primary">Go back</a></td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                        <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}</td>
                      </tr>
                </tbody>




    </div>
</div>


@endsection

