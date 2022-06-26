<?php 

    session_start();
// Kết nối Database
    include '../../connectsql.php';
    
    $id_hv=$_GET['id_hv'];
    echo $id_hv;
    //$email=$_SESSION['email'];
    $sql = "DELETE FROM hoivien WHERE ID_HV='$id_hv'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
                        
            header("location: ../hoivien/hoivien.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>