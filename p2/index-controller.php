<?php
// pseudo code from README.MD
// * Define a winner variable, that is null to start with
// * Player A and B each roll a six sided dice
//     * Use rand function to select a number from 1-6
//     * Use the selected number to determine each player's score
// * If Player A's score is higher, they win
//     * Compare Player A and B's scores, if Player A's is higher they win
//     * If Player B's score is higher they win
//     * If Plyer A and Player B's scores match, then its a tie

$winner = null;

// each player "rolls" a number betweeen 1 and 6
$diceA = rand(1,6);
$diceB = rand(1,6);

// Determine the players scores
$rollA = $diceA;
$rollB = $diceB;

// Determine the winner or declare a tie, based on the players rolls
if ($rollA < $rollB) {
    $winner = 'Player A Wins!';
} elseif ($rollA > $rollB) {
    $winner = 'Player B Wins!';
} elseif ($rollA == $rollB) {
    $winner = 'Tie Game!';
}

