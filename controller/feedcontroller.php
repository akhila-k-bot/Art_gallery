<?php include '../config.php';
$admin=new Admin();
if(isset($_POST['sendfeed']))
 {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
   //  $password=$_POST['pass'];
    $stmt=$admin->cud("INSERT INTO `feedback`( `f_name`, `f_email`, `f_msg`)
 VALUES ('$name','$email','$message')","successfull..");
    echo"<script> alert('Feedback Sent successfully'); window.location.href='../index.php';</script>";
 }

?>