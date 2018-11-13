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

            while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                $active 				= $r[ "Active" ];
            }
            
            if ($active != ''){
                echo"
                <script>
                    alert(\"Your account is already active! Please log in. If you forgot your password, please contact the ~Webmaster~!\");
                    window.location.replace(\"http://saenjit.com/memberlogin.html\");
                </script>";
                exit();
            }

            //Successfully passed all tests:
            $s = "UPDATE LoginTable SET Active = 'first' WHERE Email = '$email'";
            mysqli_query ($db, $s) or die (mysqli_error($db));
            
            echo"
            <script>
                alert(\"Password Requested. Please check your email. Phi Alpha. \");
                window.location.replace(\"http://saenjit.com/\");
            </script>";


        ?>
<!------------------------------------------------------------------->