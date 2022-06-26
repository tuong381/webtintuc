<?php
session_start();
include '../../connectsql.php';

        $email = $_POST['email'];
        $password =md5( $_POST['password']);
        $newpassword = md5($_POST['newpassword']);
        $confirmnewpassword =md5( $_POST['confirmnewpassword']);
        $sql = "SELECT MATKHAU_ADMIN FROM admin WHERE EMAIL_ADMIN='$email'";
        $result=$con->query($sql);
        $row=$result->fetch_assoc();


        if(!$result)
        {
        echo "The email you entered does not exist";
        }
        else if($password!= $row['MATKHAU_ADMIN'])
        {
        echo "You entered an incorrect password ";
        }


        else if($newpassword=$confirmnewpassword){
        $sql="UPDATE admin SET MATKHAU_ADMIN='$newpassword' where EMAIL_ADMIN='$email'";
        $result=$con->query($sql);

    header ("location:  ../../index.php");

}


$con->close();
      ?>









