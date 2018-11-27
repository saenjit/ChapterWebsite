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
            $name = $_POST['changeContactEmailSelect'];

        ?>
<!------------------------------------------------------------------->
<?php
    $s = "UPDATE LoginTable SET Position = '' WHERE Position = 'R'";
    $t = mysqli_query($db,$s) or die("Removing position from previous member failed.");

    $s = "UPDATE LoginTable SET Position = 'R' WHERE Name = '$name'";
    $t = mysqli_query($db,$s) or die("Adding position to new member failed.");

    echo "
        <script>
            alert(\"Contact email successfully changed.\");
            
        </script>";
?>