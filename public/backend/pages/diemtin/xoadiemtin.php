<?php 

    session_start();
// Kết nối Database
    include '../../connectsql.php';
    
    $id_dt=$_GET['id_dt'];
    echo $id_dt;
    //$email=$_SESSION['email'];
    $sql = "DELETE FROM diemtin WHERE ID_DT='$id_dt'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
                        
            header("location: ../Diemtin/diemtin.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>