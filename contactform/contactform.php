<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    if (mail('saenjiotatau@gmail.com',$subject,$message)){
        echo "
        <script>
            alert(\"Message Sent. Allow 24-48 hours for us to get back to you.\");
            window.location.replace(\"http://saenjit.com/index.html#contact\");
        </script>
        ";
    }else{
        echo "
        <script>
            alert(\"Message was NOT sent. Please try again.\");
            window.location.replace(\"http://saenjit.com/index.html#contact\");
        </script>
        ";
    }

?>