<?php include '../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){

$oid= $_POST['id'];
$msg= $_POST['message'];

$cid=$_SESSION['C_id'];

$stmt=$admin->cud("INSERT INTO `feedback`(`c_id`, `o_id`, `f_msg`) VALUES ('$cid','$oid','$msg')","Success");
 echo"<script> alert('Feedback sent successfully'); window.location.href='../orderstatus.php';</script>";


}
?>
