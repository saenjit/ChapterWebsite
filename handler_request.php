<!------------------------------AUTHENTICATION----------------------->
        <?php
            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
            ini_set('display_errors' , 1);

            include ("sqlaccount.php") ;
            include ("passwordgenerator.php");

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
                    window.location.replace(\"http://saenjit.com/memberrequest.html\");
                </script>
                ";
                exit();
            }

            if (mysqli_num_rows($t)<1){
                echo"
                <script>
                    alert(\"You are not a brother...IP Address has been reported.\");
                    window.location.replace(\"http://saenjit.com/\");
                </script>";
                exit();
            }

            while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                $active 				= $r[ "Active" ];
            }
            
            if ($active == 'no'){
                echo"
                <script>
                    alert(\"Your account is disabled. Please contact the ~Webmaster~.\");
                    window.location.replace(\"http://saenjit.com/memberlogin.html\");
                </script>";
                mail("tam44@njit.edu", "Disabled Account Attempted to Request Access", $email." Attempted to log in.");
                exit();
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
            $randompassword = random_pass(6);//randomPassword(6,1,"lower_case");
            $randompassHashed = md5($randompassword);
            
            $s = "UPDATE LoginTable SET Active = 'first', Password = '$randompassHashed' WHERE Email = '$email'";
            mysqli_query ($db, $s) or die (mysqli_error($db));
            
            $out = "Welcome to SAE NJIT brother.
            Your account is now active.
            Please sign in using your NJIT Email and with temporary password: " .$randompassword ."
            When you log in for the first time, please change your password.
            
            Phi Alpha,
            ~Webmaster~";
            
            $from = "Webmaster@saenjit.com";
            $to = $email;
            $subject = "SAE NJIT Login Information";
            $message = $out;
            $headers = "From:" . $from;

            mail($to, $subject, $message, $header);
            
            echo"
            <script>
                alert(\"Password Requested. Please check your email. Phi Alpha. \");
                window.location.replace(\"http://saenjit.com/memberlogin.html\");
            </script>";


        ?>
<!------------------------------------------------------------------->