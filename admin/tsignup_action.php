<?php

include('database.php');
$name=$_POST['tname'];
$email=$_POST['email'];
$phone=$_POST['pno'];
$branch=$_POST['branch'];
$dob=$_POST['dob'];
$status="pending";


$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
// rename file
if (file_exists($target_file)) {
	
$test = explode('.',$_FILES["img"]["name"]);
$test_name=$test[0];
$extn=end($test);
$random_number=rand(10000,1000000);
$final_name=$test_name.$random_number.'.'.$extn;
$_SESSION["img_name_2"]=$final_name;
$target_file = $target_dir .$final_name;
   
if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
	$_SESSION["image_add"]="Entry Is successfully created.";
}

if ($_FILES["img"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
} 
// Allow certain file formats
if($extn != "jpg" && $extn != "png" && $extn != "jpeg"
&& $extn != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
}
else{
   if  
   (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
	    $_SESSION["img_name_2"]=basename($_FILES["img"]["name"]);
		$_SESSION["image_add"] = "Entry Is successfully created.";
	} 
	else {
       echo "Sorry, there was an error uploading your file.";
   }
}
echo $tt=$_SESSION["img_name_2"];
echo $_SESSION["image_add"];

$sql="insert into teacher ( name,email,phone,branch,dob,image,status ) values ('".$name."','".$email."','".$phone."','".$branch."','".$dob."','".$tt."','".$status."')";

if($conn->query($sql)=== true){
	//echo "record insert";
}
else{
	
	 //echo "Error";
}

$conn->close();
header('Location:teacher_login.php');

?>
