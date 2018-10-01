



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Project 2</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
    rel='stylesheet'
    >
    <link rel="stylesheet" href="css/style.css">
    <?php require('php/logic.php'); ?>

</head>
<body>

<h1> Blockbusters of Summer 2018 </h1>

<form method='GET' action='search.php'>
<!--<input type='text' name='searchterm'>  -->
    <h2>Month</h2>
        <input type='checkbox' name='month[]' value='may'>May 2018<br>
        <input type='checkbox' name='month[]' value='june'>June 2018<br>
        <input type='checkbox' name='month[]' value='july'>July 2018<br>
        <input type='checkbox' name='month[]' value='august'>August 2018<br>
    <h2>Genre</h2>
    <select>

        <option value="all" name='all'>All Genres</option>
        <option value="action" name='action'>Action/Adventure</option>
        <option value="comedy" name='comedy'>Comedy</option>
        <option value="drama" name='drama'>Drama</option>
        <option value="romance" name='romance'>Romance</option>
        <option value="comedy" name='family'>Family</option>
        <option value="drama" name='horror'>Horror</option>
        <option value="drama" name='scifi'>Sci-Fi</option>
    </select>
    <br>

    <h2>Total Gross</h2>
    <input type='radio' name='gross' value='worldwide'>Worldwide Gross<br>
    <input type='radio' name='gross' value='us'>US Gross<br>

<br>
    <input type='submit' value='search'>
</form>

</body>
</html>