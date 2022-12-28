<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "steve@telecomplus.org.uk";
    $headers = "From: ".$mailFrom; 
    $txt = "You have a message ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt ,$headers);

    header("Location: index.html?Message Sent");
}
