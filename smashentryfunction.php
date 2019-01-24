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
                    alert(\"Not logged in...\");
                    window.location.replace(\"http://saenjit.com/memberlogin.html\");
                </script>";
                exit();
            }
            //creates datetime object and grabs email and name
            date_default_timezone_set('America/New_York');
            $dateTime = date("Y-m-d H:i:s");
            $email = $_SESSION['email'];
            $name = $_SESSION["name"];

            $winner = $_POST['winnerSelect'];
            $winningCharacter = $_POST['winningCharacterSelect'];
            $loser = $_POST['loserSelect'];
            $losingCharacter = $_POST['losingCharacterSelect'];
        
            $s = "INSERT INTO SmashRankingsTable VALUES ('$winner','$winningCharacter','$loser','$losingCharacter','$dateTime','$name')"; 
            $t = mysqli_query($db,$s) or die("Adding Entry Failed");
            echo"
                <script>
                    alert(\"Entry successfully added. Your name has been recorded as well. Thank you!\");
                    window.location.replace(\"http://saenjit.com/smash.php#list\");
                </script>";
                

        ?>
<!------------------------------------------------------------------->
