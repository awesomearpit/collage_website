<?php
include('database.php');

session_start();

$sql = "SELECT * FROM student where id='".$_SESSION['adminid']."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
		     	
			 $id=$row['id'];
			 
			 
			 $name=$row['name'];
			 $email=$row['email'];
			 $pno=$row['phone'];
			 $branch=$row['branch'];
			 $dob=$row['dob'];
              
             // echo $name; 			  
             // echo $email; 			  
             // echo $pno; 			  
             // echo $branch;			 
             // echo $dob;
		 
			 // $sql = "UPDATE student SET uname='$uname',pass='$pass' WHERE id=".$id;
			$sql = "UPDATE student SET name='$name',email='$email',phone='$pno',branch='$branch',dob='$dob' WHERE id=".$id;
	
			 if($conn->query($sql)=== true){
				//echo "record insert";
			}
			else{
				
				 //echo "Error";
			}

		 }

echo "success...";
 }
else{
	echo '0';
}
$conn->close();
?>