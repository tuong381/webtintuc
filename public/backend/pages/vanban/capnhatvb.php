<?php
    session_start();
    
    include '../../connectsql.php';
    $id_vb=$_POST['id_vb'];
    $cm_vb=$_POST['cm_vb'];
    $nd_vb=$_POST['nd_vb'];
    $tieude_vb=$_POST['tieude_vb'];
    $id_admin=$_SESSION["id_admin"];
    
    $day=date("y-m-d");
    echo $_FILES['file_vb']['name'];
    
   if (!empty($_FILES['file_vb']['name'])){
       
        if (!empty($_FILES['anh_vb']['name'])){
            $duongdan='../../../upload/vanban/'.$_FILES['file_vb']['name'];
            $duongdan1='/vanban/'.$_FILES['file_vb']['name'];

            $duongdan2='../../../upload/vanban/'.$_FILES['anh_vb']['name'];
            $duongdan21='/vanban/'.$_FILES['anh_vb']['name'];
            
                $sql="UPDATE vanban SET ID_ADMIN='$id_admin', ID_CHUYENMUC_VB='$cm_vb',TIEUDE_VB='$tieude_vb',NOIDUNG_VB='$nd_vb',NGAYDANG_VB='$day', FILE_VB='$duongdan1',HINHANH_VB='$duongdan21' where ID_VB='$id_vb'";
                move_uploaded_file($_FILES['file_vb']['tmp_name'],$duongdan);
                move_uploaded_file($_FILES['anh_vb']['tmp_name'],$duongdan);
                echo $sql;
        }
        else{
            $duongdan='../../../upload/vanban/'.$_FILES['file_vb']['name'];
            $duongdan1='/vanban/'.$_FILES['file_vb']['name'];

                $sql="UPDATE vanban SET ID_ADMIN='$id_admin', ID_CHUYENMUC_VB='$cm_vb',TIEUDE_VB='$tieude_vb',NOIDUNG_VB='$nd_vb',NGAYDANG_VB='$day', FILE_VB='$duongdan1' where ID_VB='$id_vb'";
                move_uploaded_file($_FILES['file_vb']['tmp_name'],$duongdan);
                echo $sql;

        }
    }
    else {

        if (!empty($_FILES['anh_vb']['name'])){

            
            $duongdan2='../../../upload/vanban/'.$_FILES['anh_vb']['name'];
            $duongdan21='/vanban/'.$_FILES['anh_vb']['name'];
            $sql="UPDATE vanban SET ID_ADMIN='$id_admin', ID_CHUYENMUC_VB='$cm_vb',TIEUDE_VB='$tieude_vb',NOIDUNG_VB='$nd_vb',NGAYDANG_VB='$day', HINHANH_VB='$duongdan21' where ID_VB='$id_vb'";
                move_uploaded_file($_FILES['anh_vb']['tmp_name'],$duongdan2);
                echo $sql;
        }
        else{


        $sql="UPDATE vanban SET ID_ADMIN='$id_admin', ID_CHUYENMUC_VB='$cm_vb',TIEUDE_VB='$tieude_vb',NOIDUNG_VB='$nd_vb',NGAYDANG_VB='$day' where ID_VB='$id_vb'";
        echo $sql;
        }
    }

    
    
    $result=$con->query($sql);
    header ("location: ../vanban/vanban.php");
    $con->close();


  
?>
