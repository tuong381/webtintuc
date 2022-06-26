<?php 

    session_start();
    include '../../connectsql.php';
    $id_cmpl=$_GET['id_cmpl'];
    $sql = "DELETE FROM chuyenmucphapluat WHERE ID_CHUYENMUC_PL='$id_cmpl'";
    $result=$con->query($sql);
        if ( $result==TRUE) {         
            header("location: ../chuyenmucphapluat/");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    $con->close();    
?>