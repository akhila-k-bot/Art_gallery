<?php include '../config.php';
$admin= new Admin(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Admin</title>
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
   
<div class="row">
   
               <div class="col-xl-12 col-lg-12" style="margin-top:50px">
               <h1> <b>Order Details </b></h1>
                  <div class="card">
                     <div class="card-block">
                        <div class="table-responsive">
                           <table class="table m-b-0 photo-table">
                              <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"> Name</th>
                                            <!-- <th scope="col">Contact No</th> -->
                                            <th scope="col">Email</th>
                                            <th scope="col">Message</th>
                                            <!-- <th scope="col">Quantity</th>
                                            <th scope="col">Total price</th> -->
                                            <!-- <th scope="col">Status</th> -->
                                            <!-- <th scope="col">Order Id</th> -->

                                            <!-- <th scope="col">Orderd Date</th>

                                            <th scope="col" calspan="2">Status</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i= 1;

                                        $stmt = $admin->ret("SELECT * FROM `feedback`");

                    
                                        $count = $stmt->rowCount();
                                       //  echo "$count";
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                                        <tr>
                                            <th scope="row"><?php echo $i++ ; ?></th>
                                            <td><?php echo $row['f_name'] ; ?></td>
                                            <td><?php echo $row['f_email'] ; ?>
                                          
                                           
                                            <td><?php echo $row['f_msg'] ; ?></td>
                                           
                          <?php     }?>
                                   </tr>
                                       </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            </div>
            </div>


            <script>
                function changestatus(did ,odid,uid) {


window.location.href="../controller/records.php?odid="+odid+"&did="+did+"&uid="+uid;

}
            </script>
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

