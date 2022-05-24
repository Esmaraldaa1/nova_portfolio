<?php
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['textarea'])) {
        //get data from form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $textarea = $_POST['textarea'];

        $to = "kimsiegers87@gmail.com";

        $subject = "Mail from portfolio website: $subject";
        $txt = "Name: " . $name . "\r\nEmail: " . $email . "\r\nSubject: " . $subject . "\r\nTextarea: " . $textarea;

        $headers = "From: noreply@kimmi.es";
        if (!empty($email)) {
            mail($to, $subject, $txt, $headers);
        }
        //redirect
        header("Location:thankyou.html");
    }
?>