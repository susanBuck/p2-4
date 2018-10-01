<?php
#Get data from form request

#Load movie data
$blockbustersJson = file_get_contents('php/blockbusters.JSON');
$movies = json_decode($blockbustersJson, true);
?>
<pre>
<?php var_dump($movies); ?>
</pre>
<?php

//dump('search.php');


//var_dump($_GET);
//echo 'You searched for '.$_GET['searchterm'];

var_dump($_GET);
echo 'You searched for '.$_GET['month'];

