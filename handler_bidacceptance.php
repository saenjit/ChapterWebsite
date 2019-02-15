<!------------------------------AUTHENTICATION----------------------->
        <?php
            session_set_cookie_params (600);
            session_start();
            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
            ini_set('display_errors' , 1);


            include ("sqlaccount.php") ;

            $db = mysqli_connect($hostname, $username, $password, $project);

            mysqli_select_db($db, $project);

            $token = $_POST['token'];
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $graduation = $_POST['graduation'];



            if ($token != '84454d048c03cd2e57ea3b31f7828fee'){
              echo "
              <script>
                  alert(\"Token was not valid. Please enter the correct token.\");
                  window.location.replace(\"http://saenjit.com/bidacceptance.html\");
              </script>
              ";
              exit();
            }

            $s = INSERT INTO NewGuys ('$firstName', '$lastName', '$email', '$graduation');
            $t = mysqli_query($db,$s); 

        ?>
<!------------------------------------------------------------------->
