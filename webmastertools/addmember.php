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
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];

        ?>
<!------------------------------------------------------------------->
<?php
    $s = "INSERT INTO LoginTable VALUES ('$name','$email','','','')"; 
    $t = mysqli_query($db,$s) or die("Adding a member failed.");
    print("Member successfully added.");
    sleep(5);
    header("location:/webmaster.php");
?>