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
    if (!$_SESSION['treasurer']){
        echo"
        <script>
            alert(\"Not logged in...\");
            window.location.replace(\"http://saenjit.com/memberlogin.html\");
        </script>";
        exit();
    }



    $target_dir = "documents/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Allow certain file formats
    if($imageFileType != "pdf" ) {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }
?>