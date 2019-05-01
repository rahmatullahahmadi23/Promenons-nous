<!-- layout -->
@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
@mapscripts
<div class="container">

        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>About</title>

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

                <!-- Style -->
                <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" />
                @mapstyles

            </head>

<h1>Team Last One</h1>
<img src="https://cdn.rugbypass.com/wp/wp-content/uploads/2019/02/aussies.jpg" alt="team last one" width="60%" height="30%">
        <br></br>
        <p> C’est avec une immense joie que nous vous présentons  notre dernier projet « PROMENADES », pour ce projet nous avons utilisés LARAVEL et suivit les videos Laravel from scratch. <br>

                Dans ce projet nous avons récupéré le projet de Sandra et l’avons transformé avec Laravel
                Les notions acquises pendant ce cours projets sont :</p>
                <li>MVC «  Modèle, Vue et Controller »</li>
                <li>Routes</li>
                <li>les migrations</li>
                <li>resssources </li>
                <li>Layout</li>
                <li>Posts</li>

                @map([
    'lat' => '46.2',
    'lng' => '6.1667',
    'zoom' => '12',
    'markers' => [[
        'title' => 'Go NoWare',
        'lat' => '46.2',
        'lng' => '6.1667',
        'url' => 'https://gonoware.com/',
    ]],
])

</div>


@endsection



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
