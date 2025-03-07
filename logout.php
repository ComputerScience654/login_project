<?php
session_start();
session_destroy(); // ล้าง session ทั้งหมด
header("Location: index.html"); // กลับไปหน้า Login
exit();
?>
