<?php
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $topic = $_POST['topic'];
    $email = $_POST['email'];
    $messages = $_POST['message'];

    $message = "<p><strong>Navn: </strong> $firstName $lastName</p>";
    $message .= "<p><strong>Email: </strong> $email</p>" . "<br>";
    $message .= "<p><strong>Melding: </strong>" . "<br>" . "$messages</p>";
    
    $to = "emilie@tonnessen.com";
    $subject = "$topic \r\n";

    $mailheader = "Fra: $email \r\n";
    $mailheader .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    // send email
    mail($to, $subject, $message, $mailheader);

    header("Location: https://www.tonnessen.com/projects/ongoing/risor-klatreklubb/kontakt-oss.html?mail-sent");
?>