*Any instructions/notes in italics should be removed from the template before submitting* 

# Project 3
+ By: Conor Napier
+ Production URL: <http://p3.conchobhar.me>

## Game planning
<!-- *Share the "plain English" notes/plan for your game* -->
* Define a winner variable, that is null to start with
* Player A and B each pick evens or odds 
    * Player A checks off a box to determine evens or odds
    * Player B chooses
        * Use Rand function to select 1 or 2
            * 1 for odds
            * 2 for evens
* Each Player rolls a six sided dice
    * Use rand function to select a number from 1-6
    * Use the selected number to determine each player's roll
    * Add the two rolls together
    * Determine if the result is even or odd
* If Player A's guess and the result match, they win
    * Compare Player A's guess to the result and check for a match
    * If Player B's guess is a match, Player B wins
    * If Player A and Player B's guesses both match the result, then its a tie
    * If neither Player A nor Player B's guess match the result, then its a draw

## Outside resources
<!-- *your list of outside resources go here* -->
<!-- Random fucntion -->
https://www.w3schools.com/php/func_math_rand.asp
<!-- Modulo for determining even or odds -->
https://www.php.net/manual/en/language.operators.arithmetic.php
https://www.php.net/manual/en/internals2.opcodes.mod.php

## Notes for instructor
<!-- *any notes for me to refer to while grading; if none, omit this section* -->