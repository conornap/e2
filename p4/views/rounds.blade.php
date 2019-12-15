@extends('templates.master')

@section('title')
      {{ $app->config('app.name')}}
@endsection

@section('content')
@if($app->old('roundNotFound'))
<div class='alert alert-warning'>
    Round History Not Found
</div>
@endif

    <h1>Evens or Odds Dice Game</h1>
    <h2>Round History</h2>
    <br>
</ul>
@foreach($rounds as $rounds)
<li><h3><strong>Round # {{ $rounds['id']}}</strong></h3></li>
<li><strong><a href='/round?id={{$rounds['id']}}'>{{ $rounds['winner']}}</strong></li></a>
<br>
@endforeach
</ul>
@endsection