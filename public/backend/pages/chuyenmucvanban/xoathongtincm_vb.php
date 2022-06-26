<?php 

    session_start();
    include '../../connectsql.php';
    $id_cmvb=$_GET['id_cmvb'];
    $sql = "DELETE FROM chuyenmucvanban WHERE ID_CHUYENMUC_VB='$id_cmvb'";
    $result=$con->query($sql);
        if ( $result==TRUE) {
                        
            header("location: index.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       

    $con->close();
    
?>