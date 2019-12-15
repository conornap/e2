@extends('templates.master')

@section('title')
      {{ $app->config('app.name')}}
@endsection

@section('content')
    <h1>Evens or Odds Dice Game</h1>
    <h2>Round History</h2>
</ul>
@foreach($rounds as $rounds)
<li> Player A picked {{ $rounds['choiceA']}}</li>
<li> Player B picked {{ $rounds['choiceB']}}</li>
<li> The dice roll totaled {{ $rounds['roll']}}</li>
<li><strong>{{ $rounds['winner']}}</strong></li>
<br>
@endforeach
</ul>
@endsection