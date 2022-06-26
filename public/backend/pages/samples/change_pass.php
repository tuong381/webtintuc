<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đổi mật khẩu</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/logo.jpg" />
    <script >
      function validate(){
	     var flag = true;
       var password = document.getElementById("password").value;
       var repassword = document.getElementById("repassword").value;
      if(repassword != password){
       	flag = false;
        alert("Mật khẩu không trùng khớp, vui lòng nhập lại!!!");
     }else {
          document.getElementById("repassword_error").innerHTML="";
           }
     return flag;
    }
    </script>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Change Password</h3>
                <form action="thaydoimk.php" method="POST" onsubmit="return validate();">
                  <div class="form-group">
                    <label>Enter your Email</label>
                    <input type="email" class="form-control p_input" name="email">
                  </div>
                  <div class="form-group">
                    <label>Enter your existing password</label>
                    <input type="password" class="form-control p_input" name="password" value="">
                  </div>
                  <div class="form-group">
                    <label>Enter your new password</label>
                    <input type="password" class="form-control p_input " name="newpassword" id="password" >
                  </div>
                  <div class="form-group">
                    <label>Re-enter your new password</label>
                    <input type="password" class="form-control p_input" name="confirmnewpassword" id="repassword">
                    <!-- <span id="repassword_error"></span> -->
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" >Update Password</button>
                  </div>
                  <!-- <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi "></i> Home </button>
                    <button class="btn btn-google col">
                      <i class="mdi "></i>Logout </button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="#"> Sign Up</a></p>
                  </form> -->
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
