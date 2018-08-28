<?php

if(isset($_POST['submit')){

    $name = $_POST("name");
    $subject = $_POST("subject");
    $email = $_POST("email");
    $telephone = $_POST("telephone");
    $message = $_POST("message");

    $mailTo = "joseph@ddcuae.ae";
    $header = "From : ".$email;
    $txt = "You have recevied the mail from ".$name."\n\n".$message;

    mail($mailTo,$subject,$txt,$header);
    header("Location: index.html?mailsend");


}

?>