<?php include 'config.php';
  $admin=new Admin();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Art Universe</title>
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

    <section id="home-section" class="hero" >
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/art.jpg);";>
	      	<div class="overlay"></div>
	        <div class="container" >
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h2 class="subheading mb-4" style="font-family:cursive; font-size:30px; color:#E6E6FA">Fill Your Cart With Art</h2>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/art.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h2 class="subheading mb-4" style="font-family:cursive; font-size:30px; color:#E6E6FA;">You Imagine We Will Create</h2>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>


<!-- <label style="margin-left:100px;"><b>Search</b></label> &nbsp <input type="text" size="30" 
onkeyup="showResult(this.value)" > 
<div id="livesearch"></div> -->





    <section class="ftco-section" style="background-color:#E6E6FA">
    	<div class="container" style="background-color:#E6E6FA">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading" style="font-family:cursive; color:black">Featured Artworks</span>
            <h2 class="mb-4" style="font-family:cursive; color:black">ART WORKS</h2>
            
          </div>
           <select onchange="Category(this.value)" >
<option>select</option>
<?php 
$stmt = $admin->ret("SELECT * FROM `category`  ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>

<option value="<?php echo  $row['cat_id'] ; ?>"><?php echo $row['cat_name'] ; ?></option>

  <?php } ?>

 ?>

 </select>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">

         


  <script>
   function Category(cat){

window.location.href="index.php?id="+cat;

   }

 </script>
    



                <?php

if(isset($_GET['id'])){

$cat= $_GET['id'];

$stmt=$admin->ret("SELECT * FROM `product` INNER JOIN `category` ON category.cat_id=product.cat_id WHERE product.cat_id = $cat  "); 

}else{
   $stmt=$admin->ret("SELECT * FROM `product` INNER JOIN `category` ON category.cat_id=product.cat_id ");

}


                 
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="single_product.php?pid=<?php echo $row['p_id'] ; ?>"  class="img-prod"><div  style="background-image:url('controller/<?php echo $row['p_image']?>'); height:300px; background-size: cover "  alt="">
              </div>

                <input type="hidden" value=<?php echo $row['cat_id'] ; ?> >
    						<span class="status"></span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"></a></h3>
    						<div class="d-flex">
    							
	    					</div>
	    					
    					</div>
    				</div>
    			</div>
            <?php }?>
    			
	</div>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>
<!-- 
		
       <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
       alert(this.responseText);
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","res_index.php?q="+str,true);
  xmlhttp.send();
}
</script>
 -->

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