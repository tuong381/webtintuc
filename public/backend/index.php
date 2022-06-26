<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang chủ</title>
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
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo.jpg" />
  </head>
  <body>

  <?php
  
  session_start();
  if (isset($_SESSION['email'])){
    include 'connectsql.php';
    $sql="SELECT *  FROM admin";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();
    $user=$row['TEN_ADMIN'];
  ?>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo.jpg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo.jpg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
               
              </div>
              
            </div>
          </li>
         
    
          <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Chuyên Mục</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../backend/pages/chuyenmucdiemtin/index.php">Chuyên mục điểm tin</a></li>
                <li class="nav-item"> <a class="nav-link" href="../backend/pages/chuyenmucvanban/index.php">Chuyên mục văn bản</a></li>
                <li class="nav-item"> <a class="nav-link" href="../backend/pages/chuyenmucphapluat/index.php">Chuyên mục pháp luật</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../backend/pages/diemtin/diemtin.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Điểm tin</span>
            </a>
          </li>

          

          <li class="nav-item menu-items">
            <a class="nav-link" href="../backend/pages/phapluat/phapluat.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Pháp luật</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../backend/pages/vanban/vanban.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Văn bản</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../backend/pages/hoivien/hoivien.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Hội viên</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../backend/pages/vanphongcongchung/vanphongcongchung.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Văn phòng công chứng</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/khach.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Email nhận tin</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/bieumau/bieumau.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Biểu mẫu</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/thuvien/thuvien.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Thư viện</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/ykiendonggop.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Ý kiến đóng góp</span>
            </a>
          </li>
          
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/gmailtudong.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Gửi mail tự động</span>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
         
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <h2>HỘI CÔNG CHỨNG VIÊN THÀNH PHỐ CẦN THƠ</h2>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/iconadmin.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $user; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Thông tin tài khoản</h6>
                  <div class="dropdown-divider"></div>
                  
                  <a href="../backend/pages/samples/change_pass.php" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Đổi mật khẩu</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="../backend/pages/samples/logout.php" onclick="return confirm('Bạn có chắc là muốn đăng xuất ???');">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Đăng xuất</p>
                    </div>
                  </a>
                 
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <?php
            //Tao ket nôi
            
                $con=new mysqli("127.0.0.1","root","","webtintuc");
                $con->set_charset("utf8");
                $id_admin=$_SESSION["id_admin"];
                //echo $tieudediemtin, $cmdt, $nddt, $day, $id_admin;
            //Viet cau truy van Sql
                $sql="SELECT COUNT(*) as sumdt FROM diemtin";
                //echo $sql;
            //thưc hien truy van
                $result=$con->query($sql);
                $row=$result->fetch_assoc();
 
            ?>


<?php  
  $day=getdate();
  $thu=$day['weekday'];
  $ngay=$day['mday'];
  $thang=$day['mon'];
  $nam=$day['year'];
?>
<p style="font-size: 20px"> <?php echo " ".$thu."  ".$ngay."/".$thang."/".$nam; ?></p>
<!-- <p>Hôm nay</p> -->

            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 mdi mdi-checkbox-multiple-marked-outline">&nbsp;&nbsp;&nbsp;<?php echo $row['sumdt'];?></h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                       
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Điểm tin</h6>
                  </div>
                </div>
              </div>
              <?php  
              
                             
             //Viet cau truy van Sql
             $sql="SELECT COUNT(*) as sumpl FROM phapluat";
             //echo $sql;
         //thưc hien truy van
             $result1=$con->query($sql);
             $row1=$result1->fetch_assoc();
             

              ?>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 mdi mdi-scale-balance">&nbsp;&nbsp;&nbsp;<?php echo $row1['sumpl'];?></h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal ">Pháp luật</h6>
                  </div>
                </div>
              </div>

              <?php 
               //Viet cau truy van Sql
               $sql="SELECT COUNT(*) as sumhv FROM hoivien";
               //echo $sql;
           //thưc hien truy van
               $result2=$con->query($sql);
               $row2=$result2->fetch_assoc();
               
              ?>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 mdi mdi-account-multiple-plus">&nbsp;&nbsp;&nbsp;<?php echo $row2['sumhv'];?></h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Hội viên</h6>
                  </div>
                </div>
              </div>
              <?php
                 //Viet cau truy van Sql
                 $sql="SELECT COUNT(*) as sumvb FROM vanban";
                 //echo $sql;
             //thưc hien truy van
                 $result3=$con->query($sql);
                 $row3=$result3->fetch_assoc();
                  
              ?>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 mdi mdi-file-word">&nbsp;&nbsp;&nbsp;<?php echo $row3['sumvb'];?></h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                      
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Văn bản</h6>
                  </div>
                </div>
              </div>
            <?php
                //Viet cau truy van Sql
                $sql="SELECT COUNT(*) as sumvpcc FROM vanphongcongchung";
                //echo $sql;
            //thưc hien truy van
                $result4=$con->query($sql);
                $row4=$result4->fetch_assoc();
                
                  

?>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 mdi mdi-bank">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumvpcc'];?></h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Văn phòng công chứng</h6>
                  </div>
                </div>
              </div>
            <?php
                 //Viet cau truy van Sql
                 $sql="SELECT COUNT(*) as sumk FROM khach";
                 //echo $sql;
             //thưc hien truy van
                 $result5=$con->query($sql);
                 $row5=$result5->fetch_assoc();
                 
            ?>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 mdi mdi-account-multiple">&nbsp;&nbsp;&nbsp;<?php echo $row5['sumk'];?></h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Khách</h6>
                  </div>
                </div>
              </div>
            <?php
            //Viet cau truy van Sql
            $sql="SELECT COUNT(*) as sumyk FROM ykiendonggop";
            //echo $sql;
        //thưc hien truy van
            $result6=$con->query($sql);
            $row6=$result6->fetch_assoc();
            ?>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 mdi mdi-comment">&nbsp;&nbsp;&nbsp;<?php echo $row6['sumyk']; ?></h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Đóng góp ý kiến</h6>
                  </div>
                </div>
              </div>
            </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <?php 
        }
        else{
          header ("location: ../backend/pages/samples/login.html");
        }
        ?>
  </body>
</html>