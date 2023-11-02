<?php

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];

$data = "$firstname" + "$lastname";
$filepath = 'D:\home\data.txt';

$file = fopen($filepath,'a');

fwrite($file, $data);

fclose($file);

?>