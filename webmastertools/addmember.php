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
            $name = $_POST['name'];
            $email = $_POST['email'];

        ?>
<!------------------------------------------------------------------->
<?php
    $s = "INSERT INTO LoginTable VALUES ('$name','$email','','','','','')"; 
    $t = mysqli_query($db,$s) or die("Adding a member failed.");
    echo"
        <script>
            alert(\"Member successfully added.\");
            window.location.replace(\"http://saenjit.com/webmaster.php#tools\");
        </script>";
?>