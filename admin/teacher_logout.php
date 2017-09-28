<?php 
session_start();
include('database.php');
unset($_SESSION['adminid']);
header('Location:student_login.php');

?>