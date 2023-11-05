<?php

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];

$data = $firstname . ' ' . $lastname . PHP_EOL;
$filepath = '/home/site/data';

$file = fopen($filepath,'a');

fwrite($file, $data);

fclose($file);

?>