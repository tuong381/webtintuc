<?php 
    session_start();
    include '../../connectsql.php';
    $id_dt=$_GET['iddt'];
    $sql = "DELETE FROM chuyenmucdiemtin WHERE ID_CHUYENMUC_DT='$id_dt'";
    $result=$con->query($sql);
        if ( $result==TRUE) {
                        
            header("location: index.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    $con->close();
      
?>