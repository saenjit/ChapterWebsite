<!------------------------------AUTHENTICATION----------------------->
        <?php
            session_set_cookie_params (600);
            session_start();
            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
            ini_set('display_errors' , 1);


            include ("sqlaccount.php") ;

            $db = mysqli_connect($hostname, $username, $password, $project);

            mysqli_select_db($db, $project); 

            $email = $_POST['email'];
            $pass = $_POST['password'];
            $pass = md5($pass);
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass;

            $s = "select * from LoginTable where Email = '$email' and Password = '$pass'" ;

            $t = mysqli_query($db,$s);

            $bad = false;

            if (!isset ($pass)){
                $bad = true;
            }
            if ($pass == ""){
                $bad = true;
            }

            if ($bad){
                echo "
                <script>
                    alert(\"Bad User/Password Character.\");
                    window.location.replace(\"http://saenjit.com/memberlogin.html\");
                </script>
                ";
                exit();
            }

            if (mysqli_num_rows($t)<1){
                echo"
                <script>
                    alert(\"Incorrect Password...\");
                    window.location.replace(\"http://saenjit.com/memberlogin.html\");
                </script>";
                exit();
            }
            
            //Set logged to true cause they passed authentication
            $_SESSION["login"] = true;

        while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                $active 				= $r[ "Active" ];
        }
        if ($active == "first"){
            header("location:changepassword.php");
        }

        //header("location:members.php");

        ?>
<!------------------------------------------------------------------->