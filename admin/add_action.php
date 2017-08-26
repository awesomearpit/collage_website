<?php

include('database.php');
$branch=$_POST['add_branch'];
$uname=$_POST['username'];
$pass=base64_encode($_POST['password']);
$sql="insert into branch ( branch,uname,pass ) values ('".$branch."','".$uname."','".$pass."')";
if($conn->query($sql)=== true){
	//echo "record insert";
}
else{
	
	 //echo "Error";
}

$conn->close();
header('Location:add.php');

?>
