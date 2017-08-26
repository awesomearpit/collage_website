<?php
session_start();
include('database.php');
$uname=$_POST['username'];
$pass=base64_encode($_POST['password']);
$sql="SELECT * FROM branch where uname='".$uname."' and pass='".$pass."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$_SESSION['adminid']=$row['id'];

header('Location:branch_profile.php');
	}
	
	}
else{
header('Location:login.php');
}
$conn->close();

?>