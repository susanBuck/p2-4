<?php

session_start();

require 'Form.php';

#dump function from week 3
function dump($mixed = null)
{
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
}

#Class info
use DWA\Form;

$form = new Form($_GET);

#Error reporting
$errors = $form->validate([
    'reservation' => 'required|alphaNumeric'
]);

$hasErrors = $form->hasErrors;

if ($form->hasErrors) {
    header('Location:index.php');
}

#Session Info
if (isset($_SESSION['reservation'])) {
    $results = $_SESSION['reservation'];
    $hasErrors = $results['hasErrors'];
}

#Get form data
$name = $form->get('reservation');
$adultTic = $form->get('adult');
$childTic = $form->get('child');
$popSize = $form->get('popcorn');
$sodaSize = $form->get('soda');

#Error reporting
$errors = $form->validate([
    'reservation' => 'required|alpha'
]);

#Ticket Statements
if ($adultTic) {
    $totalAdult = $adultTic * 9.00;
}

if ($childTic) {
    $totalChild = $childTic * 6.75;
}

$ticketTotal = $totalAdult + $totalChild;
$finalTicket = number_format($ticketTotal, 2, '.', '');

#Popcorn Statements
$popcornTotal = 0;

if ($popSize == "med") {
    $popcornTotal = 4.50;
} else if ($popSize == "small") {
    $popcornTotal = 3.75;
} else if ($popSize == "lrg") {
    $popcornTotal = 5.00;
} else {
    $popcornTotal = 0;
}

#Soda Statements
$sodaTotal = 0;

if ($sodaSize == "med_soda") {
    $sodaTotal = 4.00 + $sodaTotal;
} else if ($sodaSize == "small_soda") {
    $sodaTotal = 3.00 + $sodaTotal;
} else if ($sodaSize == "lrg_soda") {
    $sodaTotal = 4.50 + $sodaTotal;
} else ($sodaTotal = 0);

$totalFood = $sodaTotal + $popcornTotal;
$finalFood = number_format($totalFood, 2, '.', '');

$totalBill = ($finalFood + $finalTicket);

#Make sure numbers: formatted correctly, found via PHP documentation
$finalBill = number_format($totalBill, 2, '.', '');

session_unset();