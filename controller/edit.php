<?php include '../config.php';
$admin=new Admin();
if(isset($_POST['sub']))
 {
$cid=$_SESSION['C_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $image_path="uploader/".basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],$image_path);     

    $stmt=$admin->cud("UPDATE `customer` SET `c_name`='$name',`c_email`='$email',`c_address`='$address',`c_image`='$image_path' WHERE `c_id`='$cid'","successfull..");
 echo"<script> alert('profile updated succesfully'); window.location.href='../profile.php';</script>";

 }
?>