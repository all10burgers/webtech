<?php

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];

$data = "$firstname" + "$lastname";
$filepath = '~/clouddrive';

$file = fopen($filepath,'a');

fwrite($file, $data);

fclose($file);

?>