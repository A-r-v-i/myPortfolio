<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo = "babuaravindsv@gmail.com";
    $headers = "Mail from".$mailFrom;
    $txt = "Youhave a mail from ".$name.".\n\n".$message;


    if(mail($mailTo,$txt,$message)) {
        echo "<h2>Thank you</h2>"+$name+"<h2>Mail has been sent successfully!.</h2>"
    }

    else {
        echo "Something went wrong!!"
    }

}



?>
