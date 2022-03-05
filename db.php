<?php
include("key.php");

session_start();

$conn = mysqli_connect(
    'localhost',
    $USER,
    $PASSWORD,
    'main'
);
?>