<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thư viện</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/logo.jpg" />
  </head>
  <body>
  <!-- <?php
  
  session_start();
  if (isset($_SESSION['email'])){
    include '../../connectsql.php';
    $sql="SELECT *  FROM admin";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();
    $user=$row['TEN_ADMIN'];
  ?> -->

    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="../../index.php"><img src="../../assets/images/logo.jpg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.php"><img src="../../assets/images/logo.jpg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                
              
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/chuyenmucdiemtin/index.php">Chuyên mục điểm tin</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/chuyenmucvanban/index.php">Chuyên mục văn bản</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/chuyenmucphapluat/index.php">Chuyên mục pháp luật</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../diemtin/diemtin.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Điểm tin</span>
            </a>
          </li>

          

          <li class="nav-item menu-items">
            <a class="nav-link" href="../phapluat/phapluat.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Pháp luật</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../vanban/vanban.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Văn bản</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../hoivien/hoivien.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Hội viên</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../vanphongcongchung/vanphongcongchung.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Văn phòng công chứng</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../khach.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Email nhận tin</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../bieumau/bieumau.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Biểu mẫu</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="../thuvien/thuvien.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Thư viện</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="../ykiendonggop.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Ý kiến đóng góp</span>
            </a>
          </li>
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
                  <img class="img-xs rounded-circle" src="../../assets/images/faces/iconadmin.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Thông tin tài khoản</h6>
                  <div class="dropdown-divider"></div>
                  <a href="../samples/change_pass.php" class="dropdown-item preview-item">
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
                  <a class="dropdown-item preview-item" href="../samples/logout.php" onclick="return confirm('Bạn có chắc là muốn đăng xuất ???');">
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
        <!-- partial -->
       
        <div class="main-panel">
          <div class="content-wrapper content-cap">
            <div class="page-header">
              <h3 class="page-title"> THƯ VIỆN </h3>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                    <form action="themthongtin_tv.php" method="POST" enctype="multipart/form-data" >
                      <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> </th>
                              <th style="font-size:18px; text-align: left;"> Thêm thông tin thư viện</th>
                            </tr>
                          </thead>
                          <tbody>
                          <th>Chuyên mục thư viện</th>
                          <td><select name="cmtv" id="cmtv">

                          <?php


                              include '../../connectsql.php';
                                                    
                              $sql="SELECT * FROM chuyenmucthuvien";
                              //echo $sql; 
                              $result=$con->query($sql);

                              while ($row=$result->fetch_assoc()){
                                $video=$row['ID_CHUYENMUC_TV'];
                                  echo "<option value='".$row['ID_CHUYENMUC_TV']."'>".$row['TEN_CHUYENMUC_TV']." </option><br>";
                                      
                              }
                              $con->close();

                          ?>
                        </select></td>
                          </tr>
                          
                          <tr>
                          <th>File thư viện</th>
                          <td><input type="file" name="my_file" value=""></td>
                          </tr>
                        </tbody></table>
                        <button type="submit" name ="submit" class="btn btn-primary btn-fw" style="float:right;">Thêm</button>
                          
                    </form>
                     
                    
                       
                  
                </div>
              </div>
            </div>
          </div>
<br>


          <div class="card">
                  <div class="card-body">
                    <h2>Hình ảnh</h2>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th > STT </th>
                            <th > File Hình ảnh</th>
                            <th>Chức năng</th>
                            
                          </tr>
                        </thead>
                        <tbody>


                        <?php
                       
                       include '../../connectsql.php';
                       


                       $sql="SELECT * FROM thuvien INNER JOIN chuyenmucthuvien on thuvien.ID_CHUYENMUC_TV=chuyenmucthuvien.ID_CHUYENMUC_TV where chuyenmucthuvien.ID_CHUYENMUC_TV != $video";
                       //echo $sql; 
                       $result=$con->query($sql);

                       $stt=0;
                       
                       while ($row=$result->fetch_assoc()){
                           $stt=$stt+1;
                           echo "<tr>
                               <td >".$stt." </td>";

                               if ($row['ID_CHUYENMUC_TV']!=$video){
                                   echo "<td > <img src='../../../upload".$row['FILE_TV']."' alt='' style='width:150px;height: 150px;'></td>";}
                            echo "<td ><a href='xoathongtin_tv.php?id_tv=".$row['ID_TV']."'><label class='badge badge-danger'>Xóa</label></a></td>
                               </tr>";
                       }
               echo "</tbody></table>";
                   $con->close();
          
           ?> 
                  
                </div>
              </div>
            </div>








            
        <div class="main-panel">
          
          <div class="card">
                  <div class="card-body">
                    <h2>Video</h2>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th > STT </th>
                            <th > File Hình ảnh</th>
                            <th>Chức năng</th>
                            
                          </tr>
                        </thead>
                        <tbody>


                        <?php
                       
                       include '../../connectsql.php';
                       


                       $sql="SELECT * FROM thuvien INNER JOIN chuyenmucthuvien on thuvien.ID_CHUYENMUC_TV=chuyenmucthuvien.ID_CHUYENMUC_TV  where chuyenmucthuvien.ID_CHUYENMUC_TV='$video'";
                       //echo $sql; 
                       $result=$con->query($sql);

                       $stt=0;
                       
                       while ($row=$result->fetch_assoc()){
                           $stt=$stt+1;
                           echo "<tr>
                               <td >".$stt." </td>";

                               if ($row['ID_CHUYENMUC_TV']==$video){
                                   echo "<td > <video controls width='320px' height='200px' ><source src='../../../upload".$row['FILE_TV']."  '> </video></td>";}
                               echo "
                               <td ><a href='xoathongtin_tv.php?id_tv=".$row['ID_TV']."'><label class='badge badge-danger'>Xóa</label></a></td>
                               </tr>";
                       }
               echo "</tbody></table>";
                   $con->close();
          
           ?> 
                  
                </div>
              </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
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
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <!-- <?php 
        }
        else{
          header ("location: ../samples/login.html");
        }
        ?> -->
  </body>
</html>