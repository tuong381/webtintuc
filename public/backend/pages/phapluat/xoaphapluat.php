<?php 

    session_start();
// Kết nối Database
    include '../../connectsql.php';
    
    $id_pl=$_GET['id_pl'];
    echo $id_dt;
    //$email=$_SESSION['email'];
    $sql = "DELETE FROM phapluat WHERE ID_PL='$id_pl'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
                        
            header("location: ../phapluat/phapluat.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>