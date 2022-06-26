<?php
    session_start();
    if (isset($_SESSION['email'])){
        $tenchuyenmucvb=$_POST['tenchuyenmucvb'];
        include '../../connectsql.php';
        $sql="INSERT INTO chuyenmucvanban ( TEN_CHUYENMUC_VB ) VALUE ('$tenchuyenmucvb')";
        $con->query($sql);
        header("location:index.php");
        $con->close();
    }
    else {
        include "../../connectlogin.php";
    }
?>