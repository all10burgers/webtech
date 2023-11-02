<?php

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];

$data = $firstname . ' ' . $lastname . PHP_EOL;
$filepath = '~/clouddrive/data/data.txt';

$file = fopen($filepath,'a');

fwrite($file, $data);

fclose($file);

?>