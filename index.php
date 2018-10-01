<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Project 2</title>
    <link href='/css/style.css' rel='stylesheet' type='text/css'>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
    rel='stylesheet'>


    <?php require('php/logic.php'); ?>

</head>
<body>

<h1> Blockbusters of Summer 2018 </h1>

<form method='GET' action='search.php'>
    <h2>Month</h2>
        <input type='checkbox' name='month' value='may'>May 2018<br>
        <input type='checkbox' name='month' value='june'>June 2018<br>
        <input type='checkbox' name='month' value='july'>July 2018<br>
        <input type='checkbox' name='month' value='august'>August 2018<br>

    <h2>Genre</h2>
    <select name='genre'>

        <option value="all" name='genre'>All Genres</option>
        <option value="action" name='genre'>Action/Adventure</option>
        <option value="comedy" name='genre'>Comedy</option>
        <option value="drama" name='genre'>Drama</option>
        <option value="romance" name='genre'>Romance</option>
        <option value="family" name='genre'>Family</option>
        <option value="horror" name='genre'>Horror</option>
        <option value="scifi" name='genre'>Sci-Fi</option>

    </select>
    <br>

    <h2>Total Gross</h2>
        <input type='radio' name='gross' value='worldwide'>Worldwide Gross<br>
        <input type='radio' name='gross' value='us'>US Gross<br>

    <br>
    <input type='submit' name='searchChoices'>
</form>

    <?php foreach($movies as $title => $moviedata): ?>

    <div class="movieInfo">

        <?php echo $title?> earned <?=$moviedata['world_gross'] ?> worldwide.

    </div>

<?php endforeach; ?>

</body>
</html>