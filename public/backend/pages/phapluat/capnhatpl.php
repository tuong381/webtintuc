<?php
    session_start();
    
    
    include '../../connectsql.php';

    $id_pl=$_POST['id_pl'];
    $cm_pl=$_POST['cm_pl'];
    $tieude_pl=$_POST['tieude_pl'];
    $id_admin=$_SESSION["id_admin"];
    $nd_pl=$_POST['nd_pl'];
    
    $day=date("y-m-d");
    echo $_FILES['file_pl']['name'];
    
   if (!empty($_FILES['file_pl']['name'])){
       
     $duongdan='../../../upload/phapluat/'.$_FILES['file_pl']['name'];
        $duongdan1='/phapluat/'.$_FILES['file_pl']['name'];
   
    $sql="UPDATE phapluat SET ID_ADMIN='$id_admin', ID_CHUYENMUC_PL='$cm_pl',TIEUDE_PL='$tieude_pl',NOIDUNG_PL='$nd_pl',NGAYDANG_PL='$day', FILE_PL='$duongdan1' where ID_PL='$id_pl'";
    move_uploaded_file($_FILES['file_pl']['tmp_name'],$duongdan);
    echo $sql;
    }
    else {
        $sql="UPDATE phapluat SET ID_ADMIN='$id_admin', ID_CHUYENMUC_PL='$cm_pl',TIEUDE_PL='$tieude_pl',NOIDUNG_PL='$nd_pl',NGAYDANG_PL='$day' where ID_PL='$id_pl'";
        echo $sql;
        $result=$con->query($sql);
    }

    
    
        $result=$con->query($sql);
        header("location: ../phapluat/phapluat.php");
        $con->close();


  
?>
