<?php
    session_set_cookie_params(600);
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    ini_set('display_errors' , 1);
    
    if ($_POST['documentsSelect']=="none"){
        header("location:/members.php");
    }else{
        $_SESSION['document'] = $_POST['documentsSelect'];
        header("location:/documents/".$_SESSION['document']);
    }
?>