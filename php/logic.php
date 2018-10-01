<?php

$blockbustersJson = file_get_contents('php/blockbusters.JSON');
$movies = json_decode($blockbustersJson, true);