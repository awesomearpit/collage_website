<?php
session_start();
include('database.php');
$uname=$_POST['username'];
$pass=$_POST['password'];
$sql="SELECT * FROM teacher where uname='".$uname."' and pass='".$pass."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$_SESSION['adminid']=$row['id'];

header('Location:teacher_profile.php');
	}
	
	}
else{
header('Location:teacher_login.php');
}
$conn->close();

?>