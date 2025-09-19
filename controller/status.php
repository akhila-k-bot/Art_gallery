<?php include '../config.php';
$admin = new Admin();

if(isset($_GET['accept'])){

    $chid = $_GET['accept'];

    $stmt = $admin->ret("UPDATE `checkout` SET `ch_status`='accept' WHERE `ch_id`='$chid' ","insert");
    echo"<script> alert('Accepted'); window.location.href='../Admin/morder.php';</script>";


}elseif(isset($_GET['reject'])){

    $chid = $_GET['reject'];

    $stmt = $admin->ret("UPDATE `checkout` SET `ch_status`='reject' WHERE `ch_id`='$chid' ","insert");
    echo"<script> alert('Rejected'); window.location.href='../Admin/morder.php';</script>";
}

?>