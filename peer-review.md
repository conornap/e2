## P3 Peer Review

+ Reviewer's name: Conor Napier
+ Reviwee's name: Mary Vaccaro
+ URL to reviewee's Github repo: *<p3.junkpileart.com>*

*Answer the following questions in regards to the student's project you are reviewing. Include code snippets in your answers when relevant.*


### Are you able to produce any errors or unexpected results?
I found the code to be generally free of errors. Although, I did notice that the "$choice" variable does not appear to do anything. It' calls "$_GET['choice'];" and is referenced in the results array, but "choice" is never used in p3-index.php. I don’t believe this would produce an error, it just doesn't do anything and could be removed.

```
$choice = $_GET['choice'];
```
```
$results = [
    'winner' => $winner,
    'flip' => $flip,
    'choice' => $choice,
    'reasons' => $reasons,
    'newMove' => $newMove,
    'currentMove' => $currentMove,
];
```

### Referencing the course notes on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
The form design of this project is very clearly following Design C. The user inputs information in the "reason" drop-down list found on p3-index.php, which is submitted to p3-process.php. The user is then redirected back to p3-index.php with the results from the processing added to the bottom of the page.

### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)?
Yes, I believe that the if/else statements in "$showResults" in the body of p3-index.php could have been implemented in process, with the variable winner's value being a string of the desired message depending on the outcome. 

```
<?php if ($showResults) { ?>
    
            <p class='reason'>Your main reason for learning Tai Chi is: <?php echo $results['reasons']; ?>.</p>    
        
            <p class="loser" >You just learned: <?php echo $results['newMove']; ?></p>
    
            <?php if ($results['winner']) { ?>
        
            <p class='winner'>You learned the entire Tai Chi form. Now you get to begin the Sabre! <br> <br/>
            <img src="images/Summer-Tai-Chi_July-17-2019_800px.png" alt="Tai Chi Sabre Practice" width="400"/> </p>
    
            <?php } else { ?>
    
            <p class='loser'>Good work! You learned <?php echo $results['newMove']; ?>. We'll see you at your next Tai Chi class. <br> 
            <img src="images/Tai-Chi-training_Sept-2019_800px.jpg" alt="Tai Chi Practice" width="200"/></p>
    
            <?php } ?> 
    
        <?php } ?>
```

### Are there aspects of the code that you feel were not self-evident and would benefit from comments? 
I felt that the code was mostly self-evident, although there weren't any comments, so it took me a few moments to sort out what all the variables were. I think that some general comments would help to make it easier to parse. 
Even just indicating what the variables were meant to be in plain English and including the pseudocode from the readme file as comments at the beginning of each section of code would go a long way help to indicate what each piece is meant to do.
 

### List any/all built-in PHP methods used with a brief summary of what the method does
*rand - takes in two parameters and generates a random integer between them. 

```
$newMove = $move[rand(0, 9)];
```

### Are there any parts of the code that you found interesting or taught you something new?
Yes, in the array "$move", "The Whole Form!!" is listed multiple times to increase its chances of being drawn. I think this was a simple yet effective way to make the odds of winning 3/10. I do wonder if there was a way to do this programmatically, without listing the same result multiple times, but I thought this was very clever.

```
$move = ["Grasp the Bird's Tail", "Repulse the Monkey", "Golden Eagle Cools its Wing", "Cloud Hands", "Lotus Kick","Four Corners", "Fair Lady Works the Shuttles", "The Whole Form!!", "The Whole Form!!", "The Whole Form!!",];
```

### Are there any parts of the code that you don't understand?
Yes, similarly to the "$_GET['choice'];" example I discussed above, the variable "$currentMove" which is equal to "$newMove" and referenced in "$results", is never called in p3-index.php. I'm not sure why this code is necessary, or even what it was meant to do. I believe that it is also unnecessary code and could be deleted without issue.

```
$newMove = $move[rand(0, 9)];
$currentMove = $newMove;
```
```
$results = [
    'winner' => $winner,
    'flip' => $flip,
    'choice' => $choice,
    'reasons' => $reasons,
    'newMove' => $newMove,
    'currentMove' => $currentMove,
];
```
```
 <?php if ($showResults) { ?>
    
            <p class='reason'>Your main reason for learning Tai Chi is: <?php echo $results['reasons']; ?>.</p>    
        
            <p class="loser" >You just learned: <?php echo $results['newMove']; ?></p>
    
            <?php if ($results['winner']) { ?>
        
            <p class='winner'>You learned the entire Tai Chi form. Now you get to begin the Sabre! <br> <br/>
            <img src="images/Summer-Tai-Chi_July-17-2019_800px.png" alt="Tai Chi Sabre Practice" width="400"/> </p>
    
            <?php } else { ?>
    
            <p class='loser'>Good work! You learned <?php echo $results['newMove']; ?>. We'll see you at your next Tai Chi class. <br> 
            <img src="images/Tai-Chi-training_Sept-2019_800px.jpg" alt="Tai Chi Practice" width="200"/></p>
    
            <?php } ?> 
    
        <?php } ?>
```

### Are there any best practices discussed in course material that you feel were not addressed in the code?
I think the code followed the best practices we've learned fairly well. I do think some of the code could be reduced. For instance, the Boolian if/else statement to determine if winner is true or false could be shortened to a Boolean Expression. 

```
if ($newMove == "The Whole Form!!") {
    $winner = true;
} else {
    $winner = false;
}
```

### Do you have any additional comments not covered in the above questions?
I expected that my choice of reason for taking tai chi would have some bearing on the outcome of the form learned; but after reviewing the code it seems that they are totally independent, and that the user's input doesn’t affect the outcome. I'm not sure how to fix this with the tai chi concept. Although, using this code as a basis, you could have a kind of martial art game, where some forms are counters to others. With the forms provided, I think this could play like a 7 way rock paper scissors game. You could then have a tally of wins, where if you win a certain number of games you can then learn about sabers. It's a bit of a departure from the original theme, but something along those lines would work better for making the user input have an effect on the outcome.