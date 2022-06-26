<?php 

    session_start();
// Kết nối Database
    include '../../connectsql.php';
    
    $id_tv=$_GET['id_tv'];
    echo $id_tv;
    //$email=$_SESSION['email'];
    $sql = "DELETE FROM thuvien WHERE ID_TV='$id_tv'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
                        
            header("location: ../thuvien/thuvien.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>