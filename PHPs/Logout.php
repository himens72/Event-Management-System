<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['IsValid']);
unset($_SESSION['userid']);
unset($_SESSION['name']);
unset($_SESSION['email']);
header("Location:../index.php");
?>