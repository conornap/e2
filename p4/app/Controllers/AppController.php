<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return $this->app->view('index');
    }

    public function play()
    {
        

        // Define the winner variable
        $winner = null;
        // Get the choice made by the user fro mthe form
        $choiceA = $this->app->input('choice');
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
            $winner = 'Player A and B both guessed incorrectly. It is a Draw!';
        } elseif ($correctA == true && $correctB == false) {
            $winner = 'Player A guessed correctly. They are the Winner!';
        } else {
            $winner = 'Player B guessed correctly. They are the Winner!';
        }

        // Define results to be sent to DB
        $results = [
            'winner' => $winner,
            'roll' => $roll,
            'choiceA' => $choiceA,
            'choiceB' => $choiceB
        ];

        $this->app->db()->insert('p4', $results);

        $this->app->redirect('/', ['winner' => $results['winner']]);

    }
}

