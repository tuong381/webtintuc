<?php 

    session_start();
// Kết nối Database
    include '../../connectsql.php';
    
    $id_bmccv=$_GET['id_bmccv'];
    echo $id_bmccv;
    //$email=$_SESSION['email'];
    $sql = "DELETE FROM bieumauccv WHERE ID_BMCCV='$id_bmccv'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
                        
            header("location: ../bieumau/bieumau.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>