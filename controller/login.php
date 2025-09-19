<?php include '../config.php';
$admin=new Admin();

 if(isset($_POST['btn']))
 {

    $name=$_POST['email'];
    $password=$_POST['pass'];

    $stmt=$admin->ret("SELECT * FROM `customer` WHERE `c_email`='$name' AND `c_password`='$password' ");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $num=$stmt->rowCount();
    if($num>0)
    {
$id=$row['c_id'];
$_SESSION['C_id']=$id;

 echo"<script> alert('login success'); window.location.href='../index.php';</script>";

    }
     echo"<script> alert('enter valid value'); window.location.href='../login.php';</script>";


 }



 ?>