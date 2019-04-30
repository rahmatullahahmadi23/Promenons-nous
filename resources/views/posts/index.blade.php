<!-- layout -->
@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

<h1>Promenons-nous</h1>


<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Promenade</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        @if(count($posts) > 0)
        @foreach($posts as $post)
        <tbody>
          <tr>
            <td style="width:50%"><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></td>
            <td style="width:50%"><h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <h6>Publié par {{$post->auteur}} le {{$post->created_at}}</h6>
                <h4>Ville: {{$post->city}}</h4>
                <h4>Pays: {{$post->country}}</h4>
                </td>
          </tr>
        </tbody>
        @endforeach
    @else
        <p>No fille found</p>
    @endif
      </table>
      {{$posts->links()}}



@endsection


</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
