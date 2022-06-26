<?php 

    session_start();
// Kết nối Database
    include '../../connectsql.php';
    
    $id_vpcc=$_GET['id_vpcc'];
    echo $id_vpcc;
    //$email=$_SESSION['email'];
    $sql = "DELETE FROM vanphongcongchung WHERE ID_VPCC='$id_vpcc'";
    echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
                        
            header("location: ../vanphongcongchung/vanphongcongchung.php");
            
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>