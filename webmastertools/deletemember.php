<!------------------------------AUTHENTICATION----------------------->
        <?php
            session_set_cookie_params(600);
            session_start();
            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
            ini_set('display_errors' , 1);
            
            include ("sqlaccount.php") ;

            $db = mysqli_connect($hostname, $username, $password, $project);

            mysqli_select_db($db, $project); 
 
            //check if authenticated
            if (!$_SESSION['webmaster']){
                echo"
                <script>
                    alert(\"Not logged in...\");
                    window.location.replace(\"http://saenjit.com/memberlogin.html\");
                </script>";
                exit();
            }
            $name = $_POST['deleteMemberSelect'];

        ?>
<!------------------------------------------------------------------->
<?php
    $s = "DELETE FROM LoginTable WHERE Name = '$name'"; 
    $t = mysqli_query($db,$s) or die("Deleting member failed.");

    $s = "DELETE FROM SmashMemberTable WHERE Name = '$name'"; 
    $t = mysqli_query($db,$s) or die("Deleting smash table member failed.");
    echo"
        <script>
            alert(\"Member successfully deleted.\");
            window.location.replace(\"http://saenjit.com/webmaster.php#tools\");
        </script>";
?>