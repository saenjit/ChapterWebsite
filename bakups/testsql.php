<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    ini_set('display_errors' , 1);
    
    
    include ("sqlaccount.php") ;

    $db = mysqli_connect($hostname, $username, $password, $project);

    if (mysqli_connect_errno())
      {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
      }
    print "Successfully connected to MySQL.<br><br><br>";

    mysqli_select_db( $db, $project ); 

    $user = $_GET["user"];
    print "user is $user<br>";
    $pass = $_GET["pass"];
    print "pass is $pass";

    $s = "select * from PasswordsForWebsite where User = '$user' and Password = '$pass'" ;

    print "<br>SQL statement is: $s<br><br>";

    $t = mysqli_query($db,$s) ;
    print "<br>There were " . mysqli_num_rows($t) . " rows retrieved.<br><br>" ;

    
    print "Bye<br>Interaction Completed.";

?>