<?php

include('database.php');
$notice=$_POST['notice'];

date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d H:i:s');

$sql="insert into notice ( notice,date ) values ('".$notice."','".$date."')";
if($conn->query($sql)=== true){
	//echo "record insert";
}
else{
	
	 //echo "Error";
}

$conn->close();
header('Location:teacher_notice.php');

?>
