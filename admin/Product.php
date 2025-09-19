<?php include '../config.php';
$admin= new Admin(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>admin</title>
   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      
      <?php include 'header.php'; ?>
      <!-- Side bar -->
      <?php include 'sidebar.php'; ?>



<!-- 2-1 block start -->
<!-- <div id="sidebar" class="p-fixed header-users showChat"> -->
<!-- <div class="had-container"> -->
<div class="content-wrapper">
<div class="container-fluid">

<!-- Row Starts -->
<div class="row">
                  <div class="col-sm-12 p-0">
                     <div class="main-header">
                        <h4>Art</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                           <li class="breadcrumb-item"><a href="index.php"><i class="icofont icofont-home"></i></a>
                           </li>
                           <!-- <li class="breadcrumb-item"><a href="#">Forms Components</a>
                           </li> -->
                           <li class="breadcrumb-item"><a href="form-elements-bootstrap.html">Art</a>
                           </li>
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- Row end -->

               <div class="row">
                  <!-- Form Control starts -->
                  <div class="col-lg-12">
                     <div class="card">
               <div class="card-header">
                           <h5 class="card-header-text">Add Art</h5>
                           <div class="card-block">
                           <form action="../controller/cmanage.php" method="post" enctype = "multipart/form-data">
                        <?php $cstmt = $admin->ret("SELECT * FROM `category`");
                        
                        ?>
                           <div class="form-group">
                                 <label for="exampleSelect1" class="form-control-label"> Select Category</label>
                                 <select class="form-control" name="cid" id="exampleSelect1" >
                                 <option> Select Category </option>
                                 <?php while($crow= $cstmt->fetch(PDO::FETCH_ASSOC)){ ?>
                                            <option value="<?php echo $crow['cat_id'] ; ?>"><?php echo $crow['cat_name'] ; ?></option>
                                            <?php }?>
                                          
                                        </select>
                              </div>

                            
                              
                                 <div class="form-group">
                                 <label for="product" class="form-control-label">Art Name</label>
                                 <input type="text" name="product" class="form-control" required="required" placeholder="Enter Art Name">  
                                 <!-- <div class="form-group"> --><br>
                                
                                 <!-- <div class="form-group"> --><br>
                               
                                 <!-- <div class="form-group"> --><br>

                                 <label for="product" class="form-control-label">Art price</label>
                                 <input type="text" name="price" class="form-control" required="required" placeholder="Enter Art Price">  
                                 <!-- <div class="form-group"> --><br>


                                 <label for="exampleTextarea" class="form-control-label">Description</label>
                                 <textarea name="des" class="form-control" id="exampleTextarea" rows="4" placeholder="Enter Art Description"></textarea>
                                 
                                 <br>
                                 <label for="exampleTextarea" class="form-control-label">Art Image</label> &nbsp; &nbsp;
                              <input type="file" class="form-control" name="img" ></input>
                                 

                              </div>
                              
                              <button type="submit" name="addpro" class="btn btn-success waves-effect waves-light m-r-30 submit">Submit</button>
                              
                           </form>
                        </div>
                        </div>
                     </div>
                     </div>
                     </div>

                     <div class="row">
               <div class="col-xl-12 col-lg-12" style="margin-top:50px">
                  <div class="card">
                     <div class="card-block">
                        <div class="table-responsive">
                           <table class="table m-b-0 photo-table">
                              <thead>
                                 <tr class="text-uppercase">
                                    <th>SI/NO.</th>
                                    <th>Art Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <!-- <th>Total Price</th> -->

                                   
                                    <th colspan="3">Action</th>
                                    
                                    
                                 </tr>
                              </thead>
                              <tbody>

                                <?php 
                                $i=1;
                                $stmt = $admin->ret("SELECT * FROM `product`");
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>

                                 <tr>
                                    
                                    <td><?php echo $i++ ; ?>
                                    </td>

                                    <td><?php echo $row['p_name'] ; ?>  
                                    </td>

                                    <td><?php echo $row['p_description'] ; ?>  
                                    </td> 
                                    
                                    <td><img src="../controller/<?php echo $row['p_image'] ; ?> "  width="350px" height="50px"> 
                                    </td> 

                                    <td><?php echo $row['p_price'] ; ?>  
                                    </td> 

                                    <td>1
                                    </td> 

 
                                    <td>
                             <a href="../controller/cmanage.php?pdid=<?php echo $row['p_id'] ; ?>"> <button type="submit" class="btn btn-danger waves-effect waves-light m-r-10 submit">Delete</button></a><br><br/>
                              
                             <a href="productup.php?upid=<?php echo $row['p_id'] ; ?>"> <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 submit">Update</button></a>
                                    
                              <!-- <button type="submit" name="cat" class="btn btn-success waves-effect waves-light m-r-10 submit">Update</button> -->
                                
                            </td>
                                 </tr>
                                 
                                <?php }?>

                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>

                     </div>
            </div>



            <!-- 2-1 block end -->



        <!-- Required Jqurey -->
   <script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>