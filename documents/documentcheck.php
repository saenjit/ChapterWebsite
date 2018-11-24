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
            if (!$_SESSION['login']){
                echo"
                <script>
                    alert(\"You need to log in before you can view files!\");
                    window.location.replace(\"http://saenjit.com/memberlogin.html\");
                </script>";
                exit();
            }
            $document = $_POST['documentSelect'];
            
            $file = $document;
            $filename = $document;
            header('Content-type: application/pdf');
            @readfile($file);

        ?>
<!------------------------------------------------------------------->