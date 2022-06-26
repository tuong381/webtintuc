<?php
    $tieude_vb=$_POST['tieude_vb'];
        //echo $tieude_vb; 
    $cm_vb=$_POST['cm_vb'];
        //echo $cmdt;
    $nd_vb=$_POST['nd_vb'];
    $replace_nd=str_replace("'","''", $nd_vb);
        //echo $nddt;
    $duongdan='../../../upload/vanban/'.$_FILES['file_vb']['name'];
    $duongdan1='/vanban/'.$_FILES['file_vb']['name'];
    move_uploaded_file($_FILES['file_vb']['tmp_name'],$duongdan);
        //echo 'HoiCongChungCT/admin/image/vanban/' .$_FILES['file_vb']['name']."<br>";
       
        $duongdan2='../../../upload/vanban/'.$_FILES['anh_vb']['name'];
        $duongdan21='/vanban/'.$_FILES['anh_vb']['name'];
        move_uploaded_file($_FILES['anh_vb']['tmp_name'],$duongdan2);
            //echo 'HoiCongChungCT/admin/image/vanban/' .$_FILES['anh_vb']['name']."<br>";
    
    $day=date("y-m-d");
    
        //echo $day;
    session_start();
    
//Tao ket nôi
    include '../../connectsql.php';
    $id_admin=$_SESSION["id_admin"];
//Viet cau truy van Sql
    $sql="INSERT INTO vanban ( ID_CHUYENMUC_VB, ID_ADMIN, TIEUDE_VB, NOIDUNG_VB, FILE_VB,HINHANH_VB, NGAYDANG_VB) VALUES ( '$cm_vb','$id_admin','$tieude_vb','$replace_nd','$duongdan1','$duongdan21','$day') ";
    //echo $sql;
//thưc hien truy van
    $result=$con->query($sql);
    
      header ( 'location: ../vanban/vanban.php' );


//xu ly ket qua

//dong ket noi
    $con->close();
?>
