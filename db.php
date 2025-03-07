<?php
$host = "localhost";
$user = "root";
$pass = ""; // ถ้าใช้ XAMPP ปกติให้เป็นค่าว่าง
$db = "login_db"; // ชื่อฐานข้อมูลต้องตรงกับ phpMyAdmin

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
