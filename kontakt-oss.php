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

        <!-- Main Content: -->
        <main class="contact-main">
            <section class="section-contact">
                <div class="contact-info">
                    <h4 class="contact-info__title">Adresse</h4>
                    <p>Caspersens vei 25</p>
                    <p>4950 Risør</p>
                    <h4 class="contact-info__title">Email</h4>
                    <a class="link" href="mailto:test@test.com">risorklatreklubb@gmail.com </a>
                    <h4 class="contact-info__title">Åpningstider</h4>
                    <p class="">
                        Mandag <span class="">19:15 - 21:00</span>
                    </p>
                    <p class="">
                        Fredag <span class="">18:00 - 21:00</span>
                    </p>
                    <p class="">
                        Søndag <span class="">17:00 - 20:00</span>
                    </p>
                </div>
                <form action="./kontakt-oss.php" method="post" id="contact-form" class="form">
                    <div class="feedback"></div>
                    <div class="form__box">
                        <input name="first-name" id="first-name" type="text" class="form__input" placeholder="Kari">
                        <div class="form__error form__error--first-name">
                            <i class="fal fa-exclamation-triangle"></i> Skriv inn fornavnet ditt
                        </div>
                    </div>
                    <div class="form__box">
                        <input name="last-name" id="last-name" type="text" class="form__input" placeholder="Nordmann">
                        <div class="form__error form__error--last-name">
                            <i class="fal fa-exclamation-triangle"></i> Skriv inn etternavnet ditt
                        </div>
                    </div>
                    <div class="form__box">
                        <input name="email" id="email" type="email" class="form__input" placeholder="kari@nordmann.no">
                        <div class="form__error form__error--email">
                            <i class="fal fa-exclamation-triangle"></i> Skriv inn en gyldig email adresse
                        </div>
                    </div>
                    <div class="form__box">
                        <input name="topic" type="text" class="form__input" placeholder="Emne...">
                        <div class="form__error form__error--topic">
                            <i class="fal fa-exclamation-triangle"></i> Skriv hva meldingen handler om
                        </div>
                    </div>
                    <div class="form__box">
                        <textarea name="message" id="message" class="form__textarea" placeholder="Skriv din melding her..."></textarea>
                        <div class="form__error form__error--message">
                            <i class="fal fa-exclamation-triangle"></i> Skriv mer enn 5 bokstaver
                        </div>
                    </div>
                    <div class="form__box">
                        <input name="submit" type="submit" class="submit form__submit btn" value="SEND">
                    </div>
                </form>
            </section>
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