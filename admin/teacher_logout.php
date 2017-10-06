<?php 
session_start();
include('database.php');
unset($_SESSION['adminid']);
header('Location:teacher_login.php');

?>