<?php
include '../config.php';
$admin=new Admin();

$odid=$_GET['odid'];

$stmt=$admin->cud("UPDATE `order` SET `o_status`='cancelled' WHERE `o_id`='$odid'","deleted");
echo "<script> alert('Order Cancel'); window.location='../orderstatus.php';</script>";
?>