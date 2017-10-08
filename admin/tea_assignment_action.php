<?php

include('database.php');
$aname=$_POST['aname'];
$sname=$_POST['sname'];
$tname=$_POST['tname'];
$branch=$_POST['branch'];
$download="Download";

$target_dir = "../files/";
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

if ($_FILES["img"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
} 
// Allow certain file formats
if($extn != "jpg" && $extn != "png" && $extn != "jpeg"
&& $extn != "pdf" ) {
    echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
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

date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d H:i:s');

$sql="insert into assignment ( a_name,sub_name,tea_name,branch,file,download,date ) values ('".$aname."','".$sname."','".$tname."','".$branch."','".$tt."','".$download."','".$date."')";
if($conn->query($sql)=== true){
	//echo "record insert";
}
else{
	
	 //echo "Error";
}

$conn->close();
header('Location:teacher_assignment.php');

?>
