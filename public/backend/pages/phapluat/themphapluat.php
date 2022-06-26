<?php
    $tieude_pl=$_POST['tieude_pl'];
        //echo $tieudediemtin; 
    $cm_pl=$_POST['cm_pl'];
        //echo $cmdt;
    $nd_pl=$_POST['nd_pl'];
        //echo $nddt;
    $duongdan='../../../upload/phapluat/'.$_FILES['file_pl']['name'];
    $duongdan1='/phapluat/'.$_FILES['file_pl']['name'];
    move_uploaded_file($_FILES['file_pl']['tmp_name'],$duongdan);
        //echo 'HoiCongChungCT/admin/image/phapluat/' .$_FILES['file_pl']['name']."<br>";

    $day=date("y-m-d");
    
        //echo $day;
    session_start();

//Tao ket nôi
    include '../../connectsql.php';
    $id_admin=$_SESSION["id_admin"];
//Viet cau truy van Sql
    $sql="INSERT INTO phapluat ( ID_CHUYENMUC_PL, ID_ADMIN, TIEUDE_PL, NOIDUNG_PL, FILE_PL, NGAYDANG_PL) VALUES ('$cm_pl','$id_admin','$tieude_pl','$nd_pl','$duongdan1','$day')";
    echo $sql;
//thưc hien truy van
    $result=$con->query($sql);
    
    header("Location: ../phapluat/phapluat.php");

    
//xu ly ket qua

//dong ket noi
    $con->close();
?>
