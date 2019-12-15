@extends('templates.master')

@section('title')
      {{ $app->config('app.name')}}
@endsection

@section('content')
    <h1>Evens or Odds Dice Game</h1>
    <h2>Round # {{ $result['id']}}</h2>
    <br>
</ul>
<li> Player A picked {{ $result['choiceA']}}</li>
<li> Player B picked {{ $result['choiceB']}}</li>
<li> The dice roll totaled {{ $result['roll']}}</li>
<li><strong>{{ $result['winner']}}</strong></li>
<br>
</ul>
<p>
<strong><a href='/'> Play Again!</a></strong>
<p>
<a href='/rounds'>&larr; Click here to see Round History</a>
@endsection