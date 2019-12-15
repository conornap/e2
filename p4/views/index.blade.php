
@extends('templates.master')

@section('title')
    {{ $app->config('app.name')}}
@endsection

@section('content')

    <h1>Evens or Odds Dice Game</h1>

    <h2>Mechanics</h2>
    </ul>
        <li>Pick Evens or Odds.</li>
        <li>We'll then each roll a dice and add the results together</li>
        <li>A tie is declared if we both guess correctly.</li>
        <li>A draw is declared if we both guess incorrectly.</li>
        <li>Otherwise, the player with the correct guess wins!</li>
    </ul>
    <center>
    <form  method='POST' action='/play'>
        <label for='Even'> Evens</lable>
        <input type='radio' value='Even' id='Even' name='choice' checked>
        
        <br>
        <label for='Odd'> Odds</lable>
        <input type='radio' value='Odd' id='Odd' name='choice'>
        
        <br>
        <button type='submit'>Guess...</button>

    </form>
    </center>


@endsection

