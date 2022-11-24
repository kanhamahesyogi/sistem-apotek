<?php
session_start();
session_destroy();
header("location:..\Login_v4\login.php?pesan=Anda Berhasil Logout.");
?>