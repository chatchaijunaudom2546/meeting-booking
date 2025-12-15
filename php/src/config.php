<?php
$host = "db";        
$user = "root";
$pass = "root123";
$db   = "mysqli";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("เชื่อมต่อไม่สำเร็จ: " . mysqli_connect_error());
}

// echo "เชื่อมต่อสำเร็จ";
?>