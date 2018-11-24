<?php
    session_set_cookie_params(600);
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    ini_set('display_errors' , 1);
    $_SESSION['document'] = $_POST['documentSelect'];

    echo"
    <script>
        alert(".$_SESSION['document'].")
    </script>";

    //header("location:/documents/".$_SESSION['document']);
    
?>