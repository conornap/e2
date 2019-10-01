<?php require 'index-controller.php'; ?>
<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Dice Roll Game Simluator</title>
    <meta charset='utf-8'>

</head>

<body>

 <h1>Dice Roll Game Simluator</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Player A and Player B “roll their dice”.
        <li>A tie is declared if both players roll the same number.
        <li>Otherwise: The player with the higher number wins!</li>
    </ul>

    <h2>Results</h2>
    <ul>
        <li>Player A rolled a $<?php echo $rollA; ?></li>
        <li>Player B rolled a $<?php echo $rollB; ?></li>
        <li>$<?php echo $winner; ?></li>
    </ul>

</body>

</html>

