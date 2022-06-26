<?php
    $ten_vpcc=$_POST['ten_vpcc'];
        //echo $ten_vpcc;
    $ngay_tl=$_POST['ngay_tl'];
    $tt_vpcc=$_POST['tt_vpcc'];
    $duongdan='../../../upload/vanphongcongchung/'.$_FILES['anh_vpcc']['name'];
    $duongdan1='/vanphongcongchung/'.$_FILES['anh_vpcc']['name'];
    move_uploaded_file($_FILES['anh_vpcc']['tmp_name'],$duongdan);
        //echo 'HoiCongChungCT/admin/image/vanphongcongchung/' .$_FILES['anh_vpcc']['name']."<br>";

    session_start();

//Tao ket nôi
    include '../../connectsql.php';
    $id_admin=$_SESSION["id_admin"];
    //echo $tieudediemtin, $cmdt, $nddt, $day, $id_admin;
//Viet cau truy van Sql
    $sql="INSERT INTO vanphongcongchung ( ID_ADMIN,TEN_VPCC, ANH_VPCC, THONGTIN_VPCC, NGAYTHANHLAP_VPCC) VALUES ('$id_admin','$ten_vpcc','$duongdan1','$tt_vpcc','$ngay_tl')";
    echo $sql;
//thưc hien truy van
    $result=$con->query($sql);

        header("location: ../vanphongcongchung/vanphongcongchung.php");


//xu ly ket qua

//dong ket noi
    $con->close();
?>
