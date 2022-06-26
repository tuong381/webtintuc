<?php
    session_start();
    if (isset($_SESSION['email'])){
        $tenchuyenmucpl=$_POST['tenchuyenmucpl'];
        include '../../connectsql.php';
        $sql="INSERT INTO chuyenmucphapluat ( TEN_CHUYENMUC_PL ) VALUE ('$tenchuyenmucpl')";
        $con->query($sql);
        header("location:../chuyenmucphapluat/");
        $con->close();
    }
    else {
        include "../../connectlogin.php";
    }
?>