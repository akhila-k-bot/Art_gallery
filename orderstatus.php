<?php
include 'config.php';
$admin = new Admin();

if(!isset($_SESSION['C_id'])){
  header('Location:login.php');
}

$uid=$_SESSION['C_id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status</title>
    <link rel="stylesheet" href="odstatus.css">
    

    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background-color: lavender">

<div style="margin-bottom: 160px;">
    <?php
    include 'header.php';
    ?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/art.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2" ><a href="index.php" style="font-family: cursive;color:black">Home</a></span> </p>
    <h3 style="margin-bottom:20px;text-align:center;color:black;font-family: cursive;" >YOUR ORDER STATUS</h3>
    </div>
         
        </div>
      </div>
    </div>
</div>
    
   

    <div style="padding:40px 40px 20px 40px;background-color: lavender;margin-top: -40px">
       

    <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>SI/NO</th>
      <th>Title</th>
      <th>Price</th>
      <!-- <th>Position</th> -->
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
  
  <?php $stmt = $admin->ret("SELECT * FROM `checkout` INNER JOIN `product` ON checkout.p_id = product.p_id WHERE checkout.`c_id`='$uid'");
  $i = 1;
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>

    <tr>
        <td><?php echo $i++ ; ?></td>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="controller/<?php echo $row['p_image'] ; ?>"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $row['p_name'] ; ?></p>
            <!-- <p class="text-muted mb-0">john.doe@gmail.com</p> -->
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"> ₹. <?php echo $row['p_price'] ; ?></p>
       
      </td>

      <?php if($row['ch_status']=='accept'){ ?>
   

      <td>
        <span class="badge badge-success rounded-pill d-inline">Accepted</span>
      </td>

     <?php  }elseif ($row['ch_status']=='reject') { ?>

        <td>
        <span class="badge badge-danger rounded-pill d-inline">Rejected</span>
      </td>

     <?php } else { ?>

        <td>
        <span class="badge badge-danger rounded-pill d-inline">Pending</span>
      </td>

     <?php }
      ?>
    </tr>
  
   <?php } ?>
  </tbody>
</table>

       
      
    </div>




    <?php
    include 'footer.php';
    ?>
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>

</html>