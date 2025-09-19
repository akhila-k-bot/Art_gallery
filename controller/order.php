<?php
include '../config.php';
$admin=new Admin();
$uid=$_SESSION['C_id'];

if(isset($_POST['checkout'])){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
//    $oid = $_POST['oid'];

   $pid = $_POST['pid'];

    
    $stmt4=$admin->cud("INSERT INTO `checkout`(`p_id`,`c_id`,`ch_fname`,`ch_lname`,`ch_email`,`ch_add`,`country`,`ch_state`,`ch_pincode`)VALUES('$pid','$uid','$fname','$lname','$email','$address','$country','$state','$zip')","saved");

   
     echo "<script>window.location='../thankyoupage.php';</script>";
  
}
?>