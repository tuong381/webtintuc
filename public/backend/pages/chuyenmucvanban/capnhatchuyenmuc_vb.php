<?php
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['id_cmvb'])){
        $tenchuyenmucvb=$_POST['tenchuyenmucvb'];
        include '../../connectsql.php';
        $id_cmvb=$_SESSION['id_cmvb'];
        $sql="UPDATE chuyenmucvanban SET TEN_CHUYENMUC_VB = '$tenchuyenmucvb' WHERE ID_CHUYENMUC_VB = $id_cmvb"; 
        $result=$con->query($sql);
        if ( $result==TRUE) {      
            header("location: index.php");
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