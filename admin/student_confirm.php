<?php
include('database.php');
session_start();
if(isset($_SESSION['adminid']))
 {

$name = $_POST["name"];
$email = $_POST["email"];
$EmailTo = "jarpit1298@gmail.com"; // change with your email
$Subject = "";
// prepare email body text
$Body = " ";
$Body = "\n";
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success){
 // alert('success');
header('Location:index.php');
}else{
   //echo "invalid";
header('Location:index.php');
} 
?>