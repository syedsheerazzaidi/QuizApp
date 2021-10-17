<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['user_name']);
unset($_SESSION['user_type']);
header("Location:header.php");
?>