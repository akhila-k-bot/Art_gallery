<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/template/assets/images/favicon.png" />

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>

</head>

<body >
<div class="container-scroller" >
      <div class="container-fluid page-body-wrapper full-page-wrapper" >
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg" >
            <div class="card col-lg-4 mx-auto" style="  background-color: white;background:transparent;">
              <div class="card-body px-5 py-5" >
                <h3 class="card-title text-left mb-3" style="font-family:cursive; color:black">LOGIN</h3>
                     <form class="pt-3" action="controller/login.php" method="post">
                <div class="form-group">
                    <label style="font-family:cursive; color:black;background:transparent;"> Email </label>
                    <input type="email" style="font-family:cursive; color:black;background:transparent;" name="email" class="form-control p_input" required>
                  </div>
                <div class="form-group">
                  <label style="font-family:cursive; color:black;background:transparent;">Password</label>
                    <input type="password" style="font-family:cursive; color:black;background:transparent;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="pass" class="form-control p_input" required>
                  </div>
                <div class="mt-3">
                  <button type="submit" style="font-family:cursive; color:black;" name="btn" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label " style="font-family:cursive; color:black">
                      <input type="checkbox" class="form-check-input" style="font-family:cursive; color:black">
                      Keep me signed in
                    </label>
                  </div>
                <a href=""  data-mdb-toggle="modal"
  data-mdb-target="#exampleModal"
  data-mdb-whatever="@mdo" >Forgot Password</a>
                </div>
                <div class="mb-2">
                  
                </div>
                <div class="text-center mt-4 font-weight-light" style="font-family:cursive; color:black">
                  Don't have an account? <a href="register.php" style="font-family:cursive; color:black" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>




                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Email</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/enteremail.php" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="email" />
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="enteremail" >Send message</button>
      </div>
    </form>
    </div>
  </div>



  <!-- container-scroller -->
  <!-- base:js -->
  <script src="admin/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/template/assets/js/off-canvas.js"></script>
    <script src="admin/template/assets/js/hoverable-collapse.js"></script>
    <script src="admin/template/assets/js/misc.js"></script>
    <script src="admin/template/assets/js/settings.js"></script>
    <script src="admin/template/assets/js/todolist.js"></script>
    <!-- endinject -->

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>

</body>

</html>
