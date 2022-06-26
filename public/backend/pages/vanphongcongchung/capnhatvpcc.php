<?php
    session_start();

    include '../../connectsql.php';

    $id_vpcc=$_POST['id_vpcc'];
    $tt_vpcc=$_POST['tt_vpcc'];
    $ten_vpcc=$_POST['ten_vpcc'];
    $ngay_tl=$_POST['ngay_tl'];
    $id_admin=$_SESSION["id_admin"];

    $day=date("y-m-d");
    echo $_FILES['file_vpcc']['name'];

   if (!empty($_FILES['file_vpcc']['name'])){

     $duongdan='../../../upload/vanphongcongchung/'.$_FILES['file_vpcc']['name'];
        $duongdan1='/vanphongcongchung/'.$_FILES['file_vpcc']['name'];

    $sql="UPDATE vanphongcongchung SET ID_ADMIN='$id_admin', TEN_VPCC='$ten_vpcc',THONGTIN_VPCC='$tt_vpcc', ANH_VPCC='$duongdan1', NGAYTHANHLAP_VPCC='$ngay_tl' where ID_VPCC='$id_vpcc'";
    move_uploaded_file($_FILES['file_vpcc']['tmp_name'],$duongdan);
    echo $sql;
    }
    else {
        $sql="UPDATE vanphongcongchung SET ID_ADMIN='$id_admin', TEN_VPCC='$ten_vpcc',THONGTIN_VPCC='$tt_vpcc' , NGAYTHANHLAP_VPCC='$ngay_tl' where ID_VPCC='$id_vpcc'";
    echo $sql;
    }



        $result=$con->query($sql);
        header ("location: ../vanphongcongchung/vanphongcongchung.php");
        $con->close();



?>
