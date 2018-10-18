<!------------------------------AUTHENTICATION----------------------->
        <?php
            session_set_cookie_params (600);
            session_start();
            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
            ini_set('display_errors' , 1);
            
            //check if authenticated
            if (!$_SESSION['logged']){
                echo"
                <script>
                    alert(\"Not logged in...\");
                    window.location.replace(\"http://saenjit.com/memberlogin.php\");
                </script>";
                exit();
            }
            
            session_destroy();
            header("location: https://prezi.com/view/IiBMdHXzmgSlSwPM9Ljw/");
            
        ?>