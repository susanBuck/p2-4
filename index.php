



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Project 2</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include('php/logic.php'); ?>

</head>
<body>

<h1> Blockbusters of Summer 2018 </h1>

<form>
    <h2>Month</h2>
        <input type='checkbox'>May 2018<br>
        <input type='checkbox'>June 2018<br>
        <input type='checkbox'>July 2018<br>
        <input type='checkbox'>August 2018<br>
    <h2>Genre</h2>
    <select>
        <option value="all">All Genres</option>
        <option value="action">Action/Adventure</option>
        <option value="comedy">Comedy</option>
        <option value="drama">Drama</option>
        <option value="romance">Romance</option>
        <option value="comedy">Kids</option>
        <option value="drama">Horror</option>
        <option value="drama">Sci-Fi</option>
    </select>
    <br>

    <h2>Total Gross</h2>
    <input type='radio' name='gross' value='worldwide'>Worldwide Gross</br>
    <input type='radio' name='gross' value='us'>US Gross</br>

</form>
</body>
</html>