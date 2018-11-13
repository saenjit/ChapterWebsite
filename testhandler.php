<!------------------------------AUTHENTICATION----------------------->
        <?php
            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
            ini_set('display_errors' , 1);

            include ("sqlaccount.php") ;

            $db = mysqli_connect($hostname, $username, $password, $project);

            mysqli_select_db($db, $project); 

            $email = $_POST['email'];

            $s = "select * from LoginTable where Email = '$email'" ;

            $t = mysqli_query($db,$s);

            $bad = false;

            if (!isset ($email)){
                $bad = true;
            }
            if ($email == ""){
                $bad = true;
            }

            if ($bad){
                echo "
                <script>
                    alert(\"Please enter an email.\");
                    window.location.replace(\"http://saenjit.com/\");
                </script>
                ";
                exit();
            }

            if (mysqli_num_rows($t)<1){
                echo"
                <script>
                    alert(\"You are not a brother...incident reported\");
                    window.location.replace(\"http://saenjit.com/\");
                </script>";
                exit();
            }
            
            echo"
            <script>
                alert(\"Password Requested. Please check your email. Phi Alpha. \");
                window.location.replace(\"http://saenjit.com/\");
            </script>";


        ?>
<!------------------------------------------------------------------->