<!------------------------------AUTHENTICATION----------------------->
        <?php
            session_set_cookie_params(600);
            session_start();
            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
            ini_set('display_errors' , 1);

            include ("sqlaccount.php") ;
            include ("passwordgenerator.php");

            $db = mysqli_connect($hostname, $username, $password, $project);

            mysqli_select_db($db, $project); 

            $pass = $_POST['password1'];
            $pass2 = $_POST['password2'];
            
            if ($pass != $pass2){
                echo "
                <script>
                    alert(\"Password don't match. Please re-enter a new password.\");
                    window.location.replace(\"http://saenjit.com/changepassword.php\");
                </script>
                ";
                die();
            }
            if (strlen($pass) < 6){
                echo "
                <script>
                    alert(\"Password must be at least 6 characters. Please re-enter a new password.\");
                    window.location.replace(\"http://saenjit.com/changepassword.php\");
                </script>
                ";
            }

            $bad = false;

            if (!isset ($pass) || !isset ($pass2)){
                $bad = true;
            }
            if ($pass == "" || $pass2 == ""){
                $bad = true;
            }

            if ($bad){
                echo "
                <script>
                    alert(\"Password not valid.\");
                    window.location.replace(\"http://saenjit.com/changepassword.php\");
                </script>
                ";
                die();
            }

            //Successfully passed all tests:
            $email = $_SESSION['email'];
            $pass = md5($pass);
            $s = "UPDATE LoginTable SET Active = 'yes', Password = '$pass' WHERE Email = '$email'"; 

            $t = mysqli_query($db,$s); 
            
            echo"
            <script>
                alert(\"Password Changed. Please log in. \");
                window.location.replace(\"http://saenjit.com/memberlogin.html\");
            </script>";


        ?>
<!------------------------------------------------------------------->