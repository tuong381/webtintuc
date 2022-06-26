<?php

    session_start();

    include '../../connectsql.php';
    $id_dt=$_POST['iddt'];
    $id_admin=$_SESSION["id_admin"];
    $tieudediemtin=$_POST['tieudediemtin'];
    $cmdt=$_POST['cmdt'];
    $nddt=$_POST['nddt'];

    $day=date("y-m-d");
    if (!empty($_FILES['hinhanhdt']['name'])){

        $duongdan='/diemtin/'.$_FILES['hinhanhdt']['name'];
        $duongdan1='../../../upload/diemtin/'.$_FILES['hinhanhdt']['name'];
        $day=date("y-m-d");
        $sql="UPDATE diemtin SET  ID_CHUYENMUC_DT='$cmdt',ID_ADMIN='$id_admin', TIEUDE_DT='$tieudediemtin', NOIDUNG_DT='$nddt', HINHANH_DT='$duongdan', NGAYDANG_DT='$day' where ID_DT='$id_dt'";
        move_uploaded_file($_FILES['hinhanhdt']['tmp_name'],$duongdan1);
        echo $sql;


    }else{
        $sql="UPDATE diemtin SET  ID_CHUYENMUC_DT='$cmdt',ID_ADMIN='$id_admin', TIEUDE_DT='$tieudediemtin', NOIDUNG_DT='$nddt', NGAYDANG_DT='$day' where ID_DT='$id_dt'";
        echo $sql;
    }


    $result=$con->query($sql);
        header("location: ../Diemtin/diemtin.php");
       $con->close();



?>
