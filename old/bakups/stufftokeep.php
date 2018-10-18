<?php
                $bad = false;
                $pass = $_GET['pass'];
                if (!isset ($pass)){
                    $bad = true;
                }
                if ($pass == ""){
                    $bad = true;
                }

                if ($bad) exit("Bad User/Password Character.");

                if ($pass != 'phialpha2018'){
                    if ($pass == 'webmasterpass'){
                        echo "
                        <script>
                            alert(\"Welcome Webmaster\");
                            window.location.replace(\"http://saenjit.com/webmaster.php\");
                        </script>
                        ";
                    }
            ?>
                    <form action="webmaster.php" method="post">
                        Name: <input type="text" name="name">
                        Email: <input type="text" name="email">
                        <input type="submit">
                    </form>
            
            <?php
                    echo "
                        <script>
                            alert(\"Incorrect Password...\");
                            window.location.replace(\"http://saenjit.com/memberlogin.php\");
                        </script>
                        ";
                    exit();
                }
                ?>