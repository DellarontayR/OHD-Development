<?php 

include('../contactPostServer.php'); 

$fromEmail = $_SESSION['fromEmail'];
$bccEmail = $_SESSION['bccEmail'];

if(isset($_POST['submit'])){
    $name = $email =$company = $comment = '';
    $errors = [];

// Check Email
if(empty($_POST['email'])){
    $errors["email"] = "An email is required <br />";
}
{
    $email = $_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error["email"] ="Email must be a valid email address";
    }
}

// Error and result handling
if(array_filter($errors)){
    echo "<h1 class='text-center' style='font-weight: 300; line-height: 1.2;'>" .  print_r($errors, true) . "</h1>";
}else{
    $email = htmlspecialchars($_POST['email']);

    $email = mysqli_real_escape_string($conn,$email);

    $sql = "INSERT INTO subscriptions(email) VALUES('$email')";

    if(mysqli_query($conn,$sql)){
        $message = file_get_contents("subscribeEmail.html");
        $message = str_replace("#name#", $name,$message);

        $headers = "From: Organic Harvest Digital Inc. $fromEmail" . "\r\n" . "Bcc: $bccEmail" . "\r\n";
        $headers .= "Content-Type: text/html; charset=iso-8859-1 \r\n";
        
        $headers .= "X-Sender: Organic Harvest Digital Inc. $fromEmail \r\n";
        $headers .= "X-Priority: 1 \r\n"; // Urgent message!
        $headers .= "MIME-Version: 1.0\r\n";

        // Not sure
        $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
        $headers .= "Return-Path: $bccEmail\r\n"; // Return path for errors


        mail($email,"Thank you $name for subscribing to OHD!",$message,$headers);
        echo "<p class='centered text-center'> Thank you $name for subscribing to OHD! </p>";
        readfile("index.html");
    }else{
        echo "<h3 class='text-center' style='font-weight: 300; line-height: 1.2;'> It looks like there was an issue with the server, please try again later. </h3>";
    }
}
}
?>