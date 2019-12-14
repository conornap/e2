@extends('templates.master')

@section('title')
      {{ $app->config('app.name')}}
@endsection

@section('content')
    <h1>Evens or Odds Dice Game</h1>
    <h2>Round Overview</h2>
@endsection