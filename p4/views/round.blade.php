@extends('templates.master')

@section('title')
      {{ $app->config('app.name')}}
@endsection

@section('content')
    <h1>Evens or Odds Dice Game</h1>
    <h2>Round # {{ $round['id']}}</h2>
    <br>
</ul>
<li> Player A picked {{ $round['choiceA']}}</li>
<li> Player B picked {{ $round['choiceB']}}</li>
<li> The dice roll totaled {{ $round['roll']}}</li>
<li><strong>{{ $round['winner']}}</strong></li>
<br>
</ul>
<p>
<strong><a href='/'style="color: #000000; text-decoration: none;">&larr; Play Again!</a></strong>
<p>
<a href='/rounds'style="color: #000000; text-decoration: none;"> Round History</a>
@endsection