    
    
    <?php include 'config.php';
  $admin=new Admin();

  if(!isset($_SESSION['C_id'])){
    header('Location:login.php');
  }

  $pid=$_GET['pid'];
?>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Art Univrse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <body class="goto-here">
		


  <?php include 'header.php'; ?>



    
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/art.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a style="font-family:cursive; color:black" href="index.php">Home</a>
            <h1 class="mb-0 bread" style="font-family:cursive; color:black">Single Product</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section"style="background-color:Lavender" >
    	<div class="container">
    		<div class="row">

            <?php  $stmt=$admin->ret("SELECT * FROM `product` WHERE `p_id`='$pid' "); 
$row=$stmt->fetch(PDO::FETCH_ASSOC);

$stmt5 = $admin->ret("SELECT * FROM `checkout` INNER JOIN `product` ON product.p_id = checkout.p_id WHERE product.p_id = '$pid'  AND checkout.ch_status='Ready for Delivery' ");
$row5 = $stmt5->fetch(PDO::FETCH_ASSOC);

$count = $stmt5->rowCount();


?>
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="s3.jpg" class="image-popup">

              <div style=" background-image:url('controller/<?php echo $row['p_image']; ?>'); width:300px;height: 350px; background-size: contain; background-repeat: no-repeat;" class="img-fluid" alt="Colorlib Template"></div></a>
    			</div>



    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3 style="font-family:cursive; color:black;margin-left: -250px"><?php echo $row['p_name']; ?></h3>
    				<div class="rating d-flex">
							<!-- <p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p> -->
							<p class="text-left mr-4">
								<!-- <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a> -->
							</p>
							<p class="text-left">
								<!-- <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a> -->
							</p>
						</div>
    				<p class="price"><span style="font-family:cursive; color:black;margin-left: -250px"><?php echo $row['p_price']; ?></span></p>
    				<p style="font-family:cursive; color:black;margin-left: -250px"><?php echo $row['p_description']; ?></p>

            <?php if($count >=1){ ?>
            <h5 style="color:red" >
             <b> Sold </b>
            </h5>

          <?php }else{ ?>

<p></p>

          <?php } ?>


						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              
		            </div>
							</div>
							<div class="w-100"></div>

                            <!-- <form action="controller/cart.php" method="post"> -->

							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" style="font-family:cursive; color:black;margin-left: -250px" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
                        <input type="hidden" value="<?php echo $row['p_id']; ?>" id="quantity" name="pid" >
	             	<input type="text"  id="quantity" name="quantity" class="form-control input-number" style="font-family:cursive; color:black;margin-left: -220px" readonly value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" style="font-family:cursive; color:black;margin-left: -10px" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
	          	
          	</div>
          	<a href="booking.php?orid=<?php echo $row['p_id'] ; ?>"><input type="submit" value="Booking" class="btn btn-success py-3 px-5" style="font-family:cursive; color:black; background-color: BurlyWood;margin-left: -250px"/></a>
<!-- </form> -->

    			</div>
    		</div>
    	</div>
    </section>
    
        
          <?php include 'footer.php';?>
    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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