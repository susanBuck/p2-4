<?php
/**
 * Created by PhpStorm.
 * User: Mal
 * Date: 10/1/18
 * Time: 9:27 PM
 */include ('logic.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmation Page</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>

<body>

	<div class="reservationBox">
	<h1>Thank you <?php echo $name ?>!
	<div class="bill">
	<p>Your reservation is confirmed.</p> </h1>
	Your bill is described below: <br>
	Tickets: $<?php echo $finalTicket?><br>
	Concessions: $<?php echo $finalFood?>
	<br>
	Total: $<?php echo $finalBill ?>
	</div>
</div>
</body>
</html>
