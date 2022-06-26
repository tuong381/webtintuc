
<?php

$email=$_POST['email'];
//   echo $email;
$matkhau=md5($_POST['pass']);
//   echo $matkhau;

session_start();
include '../../connectsql.php';

$sql="SELECT * From admin where EMAIL_ADMIN='$email' AND MATKHAU_ADMIN='$matkhau'";
//echo $sql;
if($result=$con->query($sql)){
    //echo $sql;
    while ($row=$result->fetch_assoc()){
        $_SESSION['email']=$email;
        $_SESSION['id_admin']=$row['ID_ADMIN'];
        header ("location:  ../../index.php");
    }
}
else {echo "Mật khẩu đăng nhập không chính xác";

    header ("location:  login.html");
}


$con->close();
?>