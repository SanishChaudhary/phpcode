<?php
$con = mysqli_connect('localhost','root','','college');
if($con){
$id = $_REQUEST['editID'];

$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$contact = $_REQUEST['contact'];

$sql = "UPDATE `student `SET`name`='$name',`address`='$address',`contact` ='contact' WHERE  id = '$id'";

$result = mysqli_query($con,$sql);
if($result){
echo "connected";

}
}
?>
