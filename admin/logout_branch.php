<?php 
session_start();
include('database.php');
unset($_SESSION['adminid']);
header('Location:login_branch.php');

?>