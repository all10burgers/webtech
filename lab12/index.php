<?php

if(isset($_COOKIE['cs4413'])) {
    echo "Cookie 'cs4413' is already set with the value: " . $_COOKIE['cs4413'];
} else {
    // Set the cookie with your desired value and expiration time
    $cookieValue = "your_desired_value";
    $expirationTime = time() + 60 * 60 * 24 * 7; // 1 week (adjust as needed)

    setcookie('cs4413', $cookieValue, $expirationTime);

    echo "Cookie 'cs4413' has been set with the value: " . $cookieValue;
}
?>
