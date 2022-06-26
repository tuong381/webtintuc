<?php
    $ten_bmccv=$_POST['tenbieumau'];
    $duongdan='../../../upload/bieumauccv/'.$_FILES['file_bmccv']['name'];
    $duongdan1='/bieumauccv/'.$_FILES['file_bmccv']['name'];
    move_uploaded_file($_FILES['file_bmccv']['tmp_name'],$duongdan);
        //echo 'HoiCongChungCT/admin/image/diemtin/' .$_FILES['hinhanhdt']['name']."<br>";

    $day=date("y-m-d");
    
        //echo $day;
    session_start();

//Tao ket nôi
    include '../../connectsql.php';
    $id_admin=$_SESSION["id_admin"];
    //echo $tieudediemtin, $cmdt, $nddt, $day, $id_admin;
//Viet cau truy van Sql
    $sql="INSERT INTO bieumauccv ( ID_ADMIN, TEN_BMCCV, FILE_BMCCV, NGAYDANG_BMCCV) VALUES ('$id_admin','$ten_bmccv','$duongdan1','$day')";
    echo $sql;
//thưc hien truy van
    $result=$con->query($sql);
    
        header("location: ../bieumau/bieumau.php");


//xu ly ket qua

//dong ket noi
    $con->close();
?>
