<?php include '../config.php';
$admin = new Admin();
// session_start();

if(isset($_POST['cat'])){

    $category = $_POST['category'];
    
    $stmt = $admin->cud("INSERT INTO `category`(`cat_name`) VALUES ('$category')","Success");
    echo "<script> alert('Category Added Successfully');window.location.href='../Admin/Category.php'</script>";

}elseif(isset($_GET['did'])){
    
    $id = $_GET['did'];

    $dstmt = $admin->cud("DELETE FROM `category` WHERE cat_id=$id","deleted");
    echo"<script>alert('Category deleted Successfully.'); window.location.href='../Admin/Category.php';</script>";
}elseif(isset($_POST['ucat'])){
    
    $id = $_POST['cid'];
    $cname = $_POST['category'];
    $currentDate = date("Y-m-d");
    
    $ustmt = $admin->cud("UPDATE `category` SET cat_name='$cname',cat_date='$currentDate' WHERE cat_id='$id'","update");
    echo "<script>alert('Category Updated Successfully');window.location.href='../Admin/Category.php'</script>";
}elseif(isset($_POST['addpro'])){

    $product = $_POST['product'];
    $desp = $_POST['des'];
  
   
    $p=$_POST['price'];
    $cid = $_POST['cid'];
    
    $image_path="uploader/".basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'],$image_path);
 
      
    
    $stmt = $admin->cud("INSERT INTO `product`( `cat_id`, `p_name`, `p_description`, `p_image`, `p_price`) VALUES ('$cid','$product','$desp','$image_path','$p')","Success");
    echo "<script> alert('Product Added Successfully');window.location.href='../Admin/Product.php'</script>";
}elseif(isset($_GET['pdid'])){
$pid  = $_GET['pdid'];
$s = $admin->cud("DELETE FROM `product` WHERE `p_id`='$pid'","deleted");
echo "<script> alert('Product Deleted Successfully');window.location.href='../Admin/Product.php'</script>";

}elseif(isset($_POST['uppro'])){
    $pid= $_POST['pid'];
    $p = $_POST['name'];
    $desp = $_POST['des'];
   
   
    $pp=$_POST['price'];
    $cid = $_POST['cid'];
    $image_path="uploader/".basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'],$image_path);
       

        if($image_path == "uploader/"){
            // echo "d";
            $s = $admin->cud("UPDATE `product` SET `cat_id`='$cid',`p_name`='$p',`p_description`='$desp',`p_price`='$pp' WHERE `p_id`='$pid'","updated");

           
        }else{
            // echo "s";
            $s = $admin->cud("UPDATE `product` SET `cat_id`='$cid',`p_name`='$p',`p_description`='$desp',`p_image`='$image_path',`p_price`='$pp' WHERE `p_id`='$pid'","updated");
        }
        echo "<script> alert('Product Updated Successfully');window.location.href='../Admin/Product.php'</script>";
}elseif(isset($_POST['part'])){
    $p = $_POST['partnership'];
    $des=$_POST['des'];

    $s= $admin->cud("INSERT INTO `enquiry`( `e_title`, `e_desp`) VALUES ('$p','$des')","Insert");
    echo "<script> alert('Product Insert Successfully');window.location.href='../Admin/Enquiry.php'</script>";
}elseif(isset($_POST['upstock'])){
    $pid = $_POST['pid'];
    $pname = $_POST['name'];
    $qty = $_POST['qty'];

    $stmt = $admin->cud("UPDATE `product` SET `p_name`='$pname',`p_qty`='$qty' WHERE `p_id`='$pid'","update");
    echo "<script> alert('Stock Value Updated');window.location.href='../Admin/mstock.php'</script>";
}

// echo "<script> alert('Something Went Wrong...');window.location.href='../Admin/Product.php'</script>";

?>

