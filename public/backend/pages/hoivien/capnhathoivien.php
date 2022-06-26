<?php
    session_start();
    
    include '../../connectsql.php';
    
    $id_hv=$_POST['id_hv'];
    $id_admin=$_SESSION["id_admin"];
    $ten_hv=$_POST['ten_hv'];
    //echo $_FILES['hinhanhhv']['name'];
   if (!empty($_FILES['hinhanhhv']['name'])){
       
     $duongdan='../../../upload/hoivien/'.$_FILES['hinhanhhv']['name'];
        $duongdan1='/hoivien/'.$_FILES['hinhanhhv']['name'];
   
    $sql="UPDATE hoivien SET ID_ADMIN='$id_admin', TEN_HV='$ten_hv', ANH_HV='$duongdan1' where ID_HV='$id_hv'";
    move_uploaded_file($_FILES['hinhanhhv']['tmp_name'],$duongdan);
    echo $sql;
    }
    else {
        $sql="UPDATE hoivien SET  TEN_HV='$ten_hv'where ID_HV='$id_hv'";
        echo $sql;
    }

    
    $result=$con->query($sql);
         header("location: ../hoivien/hoivien.php");
    $con->close();


  
?>
