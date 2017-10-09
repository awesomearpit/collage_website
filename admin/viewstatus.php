<?php
include('database.php');

$a1=$_POST['a'];

$sql = "SELECT * FROM student where id='".$a1."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
		     	
			 $id=$row['id'];
			 
			 $uname=$row['email'];
			 $pass='stu'.rand(10000,1000000);
			 $status='success';
		
			 
			$sql = "UPDATE student SET uname='$uname',pass='$pass',status='$status' WHERE id=".$id;
			// echo "<pre>";
			// print_r($sql);die;
			 if($conn->query($sql)=== true){
				//echo "record insert";
			}
			else{
				
				 //echo "Error";
			}

			

		 }
		 			
		
// $email = $uname;
// $EmailTo = "jarpit1298@gmail.com"; // change with your email
// $Subject = "Login paasword";
// prepare email body text
// $Body = "<h1>THANKS FOR REGISTRATION</h1>";
// $Body = "\n";
// $Body = "\n";
// $Body = "Username:'.$uname.'";
// $Body = "\n";
// $Body = "Password:'.$pass.'";
// $Body = "\n";
// send email
// $success = mail($EmailTo, $Subject, $Body, "From:".$email);
echo "success...";
 }
else{
	echo '0';
}
$conn->close();
?>