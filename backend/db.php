<?php
$hostname = "://infinityfree.com"; 
$username = "if0_43031854";              
$password = "SADIA2023"; // এখানে double quote-এর ভেতরে আপনার ডাটাবেজের পাসওয়ার্ডটি লিখুন
$dbname   = "if0_43031854_resturent"; 

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>

