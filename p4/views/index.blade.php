@extends('templates.master')

@section('title')
    {{ $app->config('app.name')}}
@endsection

@section('content')
    <h1>Evens or Odds Dice Game</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Pick Evens or Odds.</li>
        <li>We'll then each roll a dice and add the results together</li>
        <li>A tie is declared if we both guess correctly.</li>
        <li>A draw is declared if we both guess incorrectly.</li>
        <li>Otherwise, the player with the correct guess wins!</li>
    </ul>
    <form method='GET' action='process.php'>
        <input type='radio' value='Even' id='Even' name='choice' checked>
        <label for='Even'> Evens</lable>

        <input type='radio' value='Odd' id='Odd' name='choice'>
        <label for='Odd'> Odds</lable>

        <button type='submit'>Guess...</button>

    </form>

    <?php if($results) { ?>
    <h2>Results!</h2>
        <li>Player A picked <?php echo $results['choiceA']; ?></li>
        <li>Player B picked <?php echo $results['choiceB']; ?></li>
        <li>The dice roll totaled <?php echo $results['roll']; ?></li>
        <li><?php echo $results['winner']; ?></li>

    <?php } ?>

    <p>Hello and welcome! This is the boilerplate splash page for my application built with  <a href='https://github.com/susanBuck/e2framework'>e2framework</a>.</p>

@endsection

@section('body')
    // pseudo code from for game
    // * Define a winner variable, that is null to start with
    // * Player A and B each pick evens or odds 
    //     * Player A checks off a box to determine evens or odds
    //     * Player B chooses
    //         * Use Rand function to select 1 or 2
    //             * 1 for odds
    //             * 2 for evens
    // * Each Player rolls a six sided dice
    //     * Use rand function to select a number from 1-6
    //     * Use the selected number to determine each player's roll
    //     * Add the two rolls together
    //     * Determine if the result is even or odd
    // * If Player A's guess and the result match, they win
    //     * Compare Player A's guess to the result and check for a match
    //     * If Player B's guess is a match, Player B wins
    //     * If Player A and Player B's guesses both match the result, then its a tie
    //     * If neither Player A nor Player B's guess match the result, then its a draw
    session_start();

    // Define the winner variable
    $winner = null;
    // Get the choice made by the user fro mthe form
    $choiceA = $_GET['choice'];
    // Define Even and Odd, for checking later on
    $evenodd = ['Even', 'Odd'];
    // Determine Player B's "Choice"
    $choiceB = $evenodd[rand(0,1)];
    // variables to help determine if roll is even
    $isEven = null;
    // each player "rolls" a number betweeen 1 and 6
    $diceA = rand(1,6);
    $diceB = rand(1,6);
    // Define variable to hole weather the player was correct or not
    $correctA = null;
    $correctB = null;
    // Add the two dice rolls together to determine the roll
    $roll = $diceA + $diceB;


    // Check if the remainder of the division of player A and B's dice rolls and the number 2 is zero
    // If it is, then the number is even and given the value of Even
    // Otherwise, it is not even and given the value of Odd
    if ($roll % 2 == 0 ) {
        $isEven = 'Even';
    } else {
        $isEven = 'Odd';
    }
    // Compare $isEven to player A's choice and determine if it's correct or not
    if ($choiceA == $isEven){
        $correctA = true;
    } else{
        $correctA = false;
    }
    // Compare $isEven to player B's choice and determine if it's correct or not
    if ($choiceB == $isEven) {
        $correctB = true;
    } else {
        $correctB = false;
    }

    // Determine the winner, declare a tie, or a draw, based on the outcome
    if ($correctA == true && $correctB == true) {
        $winner = 'Player A and B both guessed correctly. Tie Game!';
    } elseif ($correctA == false && $correctB == false) {
        $winner = 'Player A and B both guessed incorrectly. Its a Draw!';
    } elseif ($correctA == true && $correctB == false) {
        $winner = 'Player A guessed correctly. They are the Winner!';
    } else {
        $winner = 'Player B guessed correctly. They are the Winner!';
    }

    // Define results to be used by index.php
    $results = [
        'winner' => $winner,
        'roll' => $roll,
        'choiceA' => $choiceA,
        'choiceB' => $choiceB,
    ];
@endsection