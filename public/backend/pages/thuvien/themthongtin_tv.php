<?php

session_start();
$cmtv=$_POST['cmtv'];
echo $cmtv;
$id_admin=$_SESSION["id_admin"];
echo $id_admin;

if (isset($_POST['submit'] ) && isset($_FILES['my_file'] ) ){
        
        include '../../connectsql.php';
        //echo "<pre>";
        //print_r($_FILES['my_file']);
        $video_name=$_FILES['my_file']['name'];
        $tmp_name=$_FILES['my_file']['tmp_name'];
        $error=$_FILES['my_file']['error'];
    
        if($error == 0){
            $video_ex=pathinfo($video_name,PATHINFO_EXTENSION);
            $video_ex_lc=strtolower($video_ex);
            $allowed_exs=array("mp4","webm","avi","flv");
            if(in_array($video_ex_lc,$allowed_exs)){
                //$new_video_name = uniqid("video-", true). '.'.$video_ex_lc;
                //$video_upload_path='videos/'.$new_video_name;
                //echo $video_upload_path;
                //move_uploaded_file($tmp_name, $video_upload_path);
            
                $duongdan='../../../upload/thuvien/'.$_FILES['my_file']['name'];
                $duongdan1='/thuvien/'.$_FILES['my_file']['name'];
                move_uploaded_file($_FILES['my_file']['tmp_name'],$duongdan);

                //now let's Inser the video path into database
    
                $sql="INSERT INTO thuvien ( ID_CHUYENMUC_TV, ID_ADMIN,FILE_TV) VALUES ('$cmtv','$id_admin','$duongdan1')";
                    
                //$sql="INSERT INTO thuvien(video_url) VALUES ('$new_video_name')";
                echo $sql;
                $result=$con->query($sql);
            }else{
                
                $duongdan='../../../upload/thuvien/'.$_FILES['my_file']['name'];
                    $duongdan1='/thuvien/'.$_FILES['my_file']['name'];
                    move_uploaded_file($_FILES['my_file']['tmp_name'],$duongdan);
                
                    
                //Viet cau truy van Sql
                    $sql="INSERT INTO thuvien ( ID_CHUYENMUC_TV, ID_ADMIN,FILE_TV) VALUES ('$cmtv','$id_admin','$duongdan1')";
                    
                    echo $sql;
                    $result=$con->query($sql);
            }
        }
    }else{
        header ("location: ../thuvien/thuvien.php");
    }

    $con->close();
    header ("location: ../thuvien/thuvien.php");
?>