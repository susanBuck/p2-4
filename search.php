<?php

#Load movie data
require('php/logic.php');
#snagged dump function from helper.php week 3
function dump($mixed = null)
{
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
}

#Get data from form request
$searchMonth = $_GET['month'];
$searchGenre = $_GET['genre'];
$searchGross = $_GET['gross'];

dump($searchMonth);
dump($searchGenre);
dump($searchGross);

if ($searchMonth == "may") {
    foreach($movies as $movie => $title){
        foreach($title as $month => $return){

        echo "{$return} <br>";
        }
        };
    };


    ?>

    <pre>
<?php dump($movies['Incredibles 2']['world_gross']); ?>
</pre>

