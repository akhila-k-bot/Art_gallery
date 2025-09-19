<?php include '../config.php';
$admin=new Admin();
if(isset($_POST['submit']))
 {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['add'];
    $password=$_POST['pass'];
    $stmt=$admin->cud("INSERT INTO `customer`( `c_name`, `c_email`, `c_address`, `c_password`)
 VALUES ('$name','$email','$address','$password')","successfull..");
    echo"<script> alert('Registered successfully'); window.location.href='../login.php';</script>";
 }

?>