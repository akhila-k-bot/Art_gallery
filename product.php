
<?php include 'config.php';
  $admin=new Admin();



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
  </head>
  <body class="goto-here">
		


  <?php include 'header.php'; ?>
  


    

    <div class="container" style="margin-top:50px;" >
    		

    	</div>
    </section>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">


    				<ul class="product-category">
    					

                       <?php $cstmt = $admin->ret("SELECT * FROM `category`  ");

while($crow=$cstmt->fetch(PDO::FETCH_ASSOC)){

  ?>
    					<li><a style="font-family:cursive;color: black;font-size: 20px;background-color: lavender" href="product.php?cat_id=<?php echo $crow['cat_id'] ?>"><?php  echo $crow['cat_name'];?></a></li>
    					<?php } ?>
    				</ul>
    			</div>
    		</div>
    		<div class="row">


<?php
if(isset($_GET['cat_id'])){
$cid = $_GET['cat_id']; 

$pstmt = $admin->ret("SELECT * FROM `product` WHERE `cat_id`= '$cid' ");
while($prow = $pstmt->fetch(PDO::FETCH_ASSOC)){
?>

    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
              <
    					<a href="single_product.php?pid=<?php echo $prow['p_id'] ; ?>" class="img-prod">
                <div style="background-image:url('controller/<?php echo $prow['p_image']?>'); height:300px; background-size: cover "  >
                </div>
    						<span class="status"></span>
    						<div class="overlay"></div>
    					</a>

                   <p style="font-family: cursive;color: black"> <b><?php echo $prow['p_name'] ; ?> </b></p>
                    <p style="font-family: cursive;color: black;"> price: <b><?php echo $prow['p_price'] ; ?> </b></p><br>

  
    					<div class="text py-3 pb-4 text-center">

    						<h3><a href="#"></a></h3>

    						<div class="d-flex">  							
                  <div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"></span><span class="price-sale"></span></p>

		    					</div>

	    					</div>

 
   
	    					<div class="bottom-area d-flex px-3"><br>

                 
                 

 <p style="font-family: cursive;color: black"> Description: <b ><?php echo $prow['p_description'] ; ?> </b></p>


	    						<!-- <div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div> -->
    						</div>
    					</div>
    				</div>
    			</div>



            <?php        } }else{ ?>

                <?php


$pstmt = $admin->ret("SELECT * FROM `product` ");
while($prow = $pstmt->fetch(PDO::FETCH_ASSOC)){
?>

    			 
 <?php } } ?>

    			</div>
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