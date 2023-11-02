<?php

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];

$data = "$firstname" + "$lastname";
$filepath = '~/clouddrive/data';

$file = fopen($filepath,'a');

fwrite($file, $data);

fclose($file);

?>