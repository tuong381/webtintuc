<?php
    session_start();
    if (isset($_SESSION['email'])){
        $tenchuyenmuc=$_POST['tenchuyenmuc'];
        include '../../connectsql.php';
        $sql="INSERT INTO chuyenmucdiemtin ( TEN_CHUYENMUC_DT ) VALUE ('$tenchuyenmuc')";
        $con->query($sql);
        header("location:index.php");
        $con->close();
    }
    else {
        include "../../connectlogin.php"; 
    }
?>