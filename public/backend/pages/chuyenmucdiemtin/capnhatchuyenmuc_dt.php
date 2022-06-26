<?php
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['id_dt'])){
        $tenchuyenmuc=$_POST['tenchuyenmuc'];
        include '../../connectsql.php';
        $id_dt=$_SESSION['id_dt'];
        $sql="UPDATE chuyenmucdiemtin SET TEN_CHUYENMUC_DT = '$tenchuyenmuc' WHERE ID_CHUYENMUC_DT = $id_dt"; 
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