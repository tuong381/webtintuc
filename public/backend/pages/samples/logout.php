<?php

    session_start();
    if (isset($_SESSION['email']) && $_SESSION['email']!=NULL){
        unset($_SESSION['email']);
       
    }
     header ("location:  ../../index.php");
    

?>