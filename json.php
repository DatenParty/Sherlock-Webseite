<?php
$json = file_get_contents("http://maschini.de:5001/");
$test = json_decode($json, true);

?>