<?php

$hostname = "ec2-54-236-169-55.compute-1.amazonaws.com";
$username = "affhlcjujlixgl";
$password = "d0b6d439694c80535377960727bf2cbdaed8f03d810859ee34916ae5905260c0";
$db = "ddoskit3tds3db";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
    $email=$_POST['email'];
    $message=$_POST['message'];

    $query = "INSERT INTO `ORDERS` (`email`, `message`) VALUES ('{$email}', '{$message}')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occured. Your order has not been submitted.');
    } else {
        echo "Order received, will get back to you soon.";
    }
}

?>



