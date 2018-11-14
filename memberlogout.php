<?php
    session_start();
    $_SESSION["login"] = false;
    $_SESSION["webmaster"] = false;
    session_destroy();

    //redirect
    header("location:memberlogin.html");
?>