<?php
    session_start();
    $_SESSION["login"] = false;
    session_destroy();

    //redirect
    header("location:memberlogin.html");
?>