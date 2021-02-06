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



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Technical: -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO: -->
    <!-- <meta name="image" property="og:image" content=""> -->
    <meta name="author" content="Emilie Tønnessen - Junior Frontend Utvikler">
    <meta name="keyword"
        content="Risør, risor, norge, norway, klatreklubb, klatring, klatre, klubb, innendørs klatring, innendørs, risørhallen, agder klatreklubb, aust-agder klatreklubb, sørlandet klatreklubb, klatreutstyr, drop in, priser, info, informasjon, kontak, kontakt skjema, adresse, email">
    <meta name="description"
        content="Risør Klatreklubb er opptatt av å gjøre en innsats for at absolutt alle skal få mulighet til å prøve å klatre hos oss, uansett alder, ferdighetsnivå og erfaring. Våre aktiviteter er basert på idrettsglede, fellesskap og god helse.">

    <!-- FontAwesome: -->
    <link rel="stylesheet" href="./css/fa/all.css">

    <!-- Adobe Fonts: -->
    <link rel="stylesheet" href="https://use.typekit.net/fns1nxm.css">

    <!-- CSS: -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <!-- Page Icon: -->
    <link rel="icon" href="./images/logo.png" type="image/gif" sizes="16x16">

    <!-- Page Title -->
    <title>Kontakt Oss | Risør Klatreklubb</title>
</head>
<body>
    <!-- Navigation: -->
    <div class="wrapper">
        <!-- Navigation: -->
        <nav class="nav">
            <div class="nav__logo-container">
                <a href="./index.html">
                    <img src="./images/logo.png" alt="Risør Klatreklubb Logo" class="nav__logo">
                </a>
            </div>
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav__menu">
                <ul class="nav__list">
                    <a class="nav__link" href="./index.html">
                        <li>Hjem</li>
                    </a>
                    <a class="nav__link" href="./informasjon.html">
                        <li>Informasjon</li>
                    </a>
                    <a class="nav__link" href="./kontakt-oss.html">
                        <li>Kontakt Oss</li>
                    </a>
                    <a class="nav__link" href="./om-oss.html">
                        <li>Om Oss</li>
                    </a>
                    <a href="#" class="nav__link">
                        <li class="btn btn--secondary btn--md"><i class="fab fa-facebook"></i> Facebook</li>
                    </a>
                </ul>
            </div>
        </nav>

        <!-- Header: -->
        <header class="header">
            <h1 class="header__headline-primary">Alt du trenger for å besøke oss</h1>
        </header>

        <!-- Main Content: -->
        <main>
            <div class="container">
                <div class="form__container">
                    <form action="contact-form-handler.php" method="post" id="contact-form" class="form row">
                        <div class=" col-sm-12 col-md-6 col-lg-6">
                            <label for="first-name" class="form__label">Fornavn:</label>
                            <input name="first-name" id="first-name" type="text" class="form-control form__input" placeholder="Fornavn..." required>
                        </div>
                        <div class=" col-sm-12 col-md-6 col-lg-6">
                            <label class="form__label" for="last-name">Etternavn:</label>
                            <input name="last-name" id="last-name" type="text" class="form-control form__input" placeholder="Etternavn..." required>
                        </div>
                        <div class=" col-sm-12 col-md-6 col-lg-6">
                            <label class="form__label" for="email">Email:</label>
                            <input name="email" id="email" type="email" class="form-control form__input" placeholder="Email..." required>
                        </div>
                        <div class=" col-sm-12 col-md-6 col-lg-6">
                            <label class="form__label" for="topic">Emne:</label>
                            <input name="topic" type="text" class="form-control form__input" placeholder="Emne..." required>
                        </div>
                        <div class=" col-12">
                            <label class="form__label" for="meessage">Melding:</label>
                            <textarea name="message" id="message form-control" class="form__textarea" placeholder="Hva kan vi hjelpe deg med?..." required></textarea>
                        </div>
                        <div class="col-12" align="center">
                            <input name="submit" type="submit" class="form-control submit form__submit" value="SEND">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>



    <!-- Footer: -->
    <footer class="footer">
        <span class="current-year">2021</span> © Risør Klatreklubb. All rights reserved
    </footer>
    
    <!-- JS: -->
    <script src="./js/index.js" type="module"></script>
    </body>
    
    </html>