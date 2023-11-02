<?php

$filePath = 'D:\home\data.txt';
$namearray = file($filePath, FILE_IGNORE_NEW_LINES);

echo '<table border="1">';
foreach ($namearray as $line) {
    list($firstname, $lastname) = explode(' ', $line);
    echo '<tr><td>' . $firstname .'</td><td> '. $lastname .'</td><tr>';

}

echo '</table>';


?>