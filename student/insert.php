<?php
$con = mysqli_connect('localhost','root','','college');
if($con){
	$name = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$contact = $_REQUEST['contact'];
}

$sql  = "INSERT INTO `student`(`id`, `name`, `address`, `contact`) VALUES ('','$name','$address','$contact')";

$result = mysqli_query($con,$sql);

if($result) {
    header('location:registrationForm.php');
}


?>
