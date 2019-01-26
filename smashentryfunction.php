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
            
            if ($winner == "(select an account)" || $loser == "(select an account)" || $winningCharacter == "(select a fighter)" || $losingCharacter == "(select a fighter)") {
                echo"
                    <script>
                        alert(\"Entry was not added. Please make sure you selected the names properly.\");
                        window.location.replace(\"http://saenjit.com/smashentry.php#add\");
                    </script>";
                exit();
            }

            //updates matches table
            $s = "INSERT INTO SmashRankingsTable VALUES ('$winner','$winningCharacter','$loser','$losingCharacter','$dateTime','$name')"; 
            $t = mysqli_query($db,$s) or die("Adding Entry Failed");

            //updates character rankings
            $s = "UPDATE SmashCharacterTable SET Wins = Wins + 1 WHERE Fighter = '$winningCharacter'";
            $t = mysqli_query($db,$s) or die("Updating Character Stats Failed");

            $s = "UPDATE SmashCharacterTable SET Losses = Loses + 1 WHERE Fighter = '$losingCharacter'";
            $t = mysqli_query($db,$s) or die("Updating Character Stats Failed");

            //updates member rankings
            $s = "UPDATE SmashMemberTable SET Wins = Wins + 1 WHERE Name = '$winner'";
            $t = mysqli_query($db,$s) or die("Updating Member Stats Failed");

            $s = "UPDATE SmashMemberTable SET Losses = Losses + 1 WHERE Name = '$loser'";
            $t = mysqli_query($db,$s) or die("Updating Member Stats Failed");

            echo"
                <script>
                    alert(\"Entry successfully added. Your name has been recorded as well. Thank you!\");
                    window.location.replace(\"http://saenjit.com/smash.php#list\");
                </script>";
                

        ?>
<!------------------------------------------------------------------->
