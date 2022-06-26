<?php
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['id_cmpl'])){
        $tenchuyenmucpl=$_POST['tenchuyenmucpl'];
        include '../../connectsql.php';
        $id_cmpl=$_SESSION['id_cmpl'];
        $sql="UPDATE chuyenmucphapluat SET TEN_CHUYENMUC_PL = '$tenchuyenmucpl' WHERE ID_CHUYENMUC_PL = $id_cmpl";
        $result=$con->query($sql);
        if ( $result==TRUE) {           
            header("location: ../chuyenmucphapluat/");
        }
        else {
             echo "Error updating record: " .$con->error;
        }
        $con->close(); 
    }
    else {
        include "../../connectlogin.php";
    }
?>