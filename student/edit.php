<?php 
$con = mysqli_connect('localhost','root','','college');
if($con) {
    $id = $_REQUEST['editID'];

    $sql = "SELECT `id`,'name','address','contact' FROM `student` where id = '$id'";

    $result = mysqli_query($con,$sql);
    if($result) {
        echo "";
    }
}
?>

