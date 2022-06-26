<?php 

    session_start();
// Kết nối Database
    include '../../connectsql.php';
    
    $id_vb=$_GET['id_vb'];
    echo $id_vb;
    //$email=$_SESSION['email'];
    $sql = "DELETE FROM vanban WHERE ID_VB='$id_vb'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
                        
            header("location: ../vanban/vanban.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>