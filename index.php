<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <div class="displayBorder">
<div class="title"><h1>Let's All Go to the Movies!</h1></div>

<form method='GET' action='search.php'>

    <p>Name for Reservation <input type='text' name='reservation'></p>

    <div class="ticketBox"> <p>Select number of adult tickets</p>

    <input type='number' name='adult' step='1' min=0 max=10> $9.00 each<br>
</div>

     <div class="ticketBox">

    <p>Select number of children tickets</p>
    <input type='number' name='child' step='1' max=10 min=0> $6.75 each<br>
    </div>
    <div class="concessions">
        <h2 class = "title">Concessions</h2>
        <h4>Popcorn</h4>
            <input type='radio' name='popcorn' value='small'>  Small $3.75<br>
            <input type='radio' name='popcorn' value='med'>  Medium $4.50<br>
            <input type='radio' name='popcorn' value='lrg'>  Large $5.00<br>
        <br>
        <h4>Soft Drinks</h4>
            <input type='radio' name='soda' value='small_soda'>  Small $3.00<br>
            <input type='radio' name='soda' value='med_soda'>  Medium $4.00<br>
            <input type='radio' name='soda' value='lrg_soda'>  Large $4.50<br>
    </div>
    <br>

    <input type='submit' name='reservationDetails' value="Make Reservation" class="subButton">
  
</form>
</div>

</body>
</html>
