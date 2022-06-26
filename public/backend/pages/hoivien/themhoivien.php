<?php
    $tenhoivien=$_POST['tenhoivien'];
    $vpcc_hv=$_POST['vpcc_hv'];
        //echo $tenhoivien; 
    $duongdan='../../../upload/hoivien/'.$_FILES['anh_hv']['name'];
    $duongdan1='/hoivien/'.$_FILES['anh_hv']['name'];
    move_uploaded_file($_FILES['anh_hv']['tmp_name'],$duongdan);
        //echo 'HoiCongChungCT/admin/image/hoivien/' .$_FILES['anh_hv']['name']."<br>";

    session_start();

//Tao ket nôi
    include '../../connectsql.php';
    $id_admin=$_SESSION["id_admin"];
//Viet cau truy van Sql
    $sql="INSERT INTO hoivien ( TEN_HV, ANH_HV, VANPHONG_HV) VALUES ('$tenhoivien','$duongdan1','$vpcc_hv')";
    echo $sql;
//thưc hien truy van
    $result=$con->query($sql);
    
        header("location: ../hoivien/hoivien.php");


//xu ly ket qua

//dong ket noi
    $con->close();
?>
