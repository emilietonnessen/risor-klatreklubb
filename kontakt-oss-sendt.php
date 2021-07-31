<?php

    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            $firstName = $_POST['first-name'];
            $lastName = $_POST['last-name'];
            $userEmail = $_POST['email'];
            $topic = $_POST['topic'];
            $message = $_POST['message'];

            $to = "kontakt@risorklatreklubb.no";
            $subject = "$topic \r\n";
            $body = "";

            $body .= "<div><strong>From: </strong>" .$firstName. "</div>";
            $body .= "<div><strong>Email: </strong>".$userEmail. "</div>";
            $body .= "<div><strong>Message:</strong></div><p>".$message. "</p>";

            $mailheader = "Fra: $email \r\n";
            $mailheader .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        }

        mail($to, $subject, $body, $mailheader);

        $message_sent = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Technical: -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO: -->
    <meta name="image" property="og:image" content="https://www.tonnessen.com/projects/risor-klatreklubb/images/thumbnail.png">
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
                <a href="https://www.risorklatreklubb.no/">
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
                    <a class="nav__link" href="https://www.risorklatreklubb.no/">
                        <li>Hjem</li>
                    </a>
                    <a class="nav__link" href="./informasjon.html">
                        <li>Informasjon</li>
                    </a>
                    <a class="nav__link nav__link--active" href="./kontakt-oss.html">
                        <li>Kontakt Oss</li>
                    </a>
                    <a class="nav__link" href="./om-oss.html">
                        <li>Om Oss</li>
                    </a>
                    <a href="https://www.facebook.com/risorklatreklubb" target="_blank" rel="noopener noreferrer" >
                        <li class="btn btn--secondary btn--md btn--rkk-facebook"><i class="fab fa-facebook"></i> Facebook</li>
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
                    <a class="link" href="mailto:risorklatreklubb@gmail.com">risorklatreklubb@gmail.com </a>
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
                <form action="https://www.risorklatreklubb.no/kontakt-oss-sendt" method="post" id="contact-form" class="form">
                    <div class="feedback u-margin-bottom-large">
                        <?php
                            if($message_sent){
                                echo("<div class='feedback--success'>Takk for meldingen, vi vil kontakte deg så raskt vi kan!</div>");
                            } else{
                                echo("<div class='feedback--error'>Noe gikk galt, og meldingen ble desverre ikke sendt. Prøv på nytt.</div>");
                            }
                        ?>
                    </div>
                    <div class="form__box">
                        <input name="first-name" id="first-name" type="text" class="form__input" placeholder="Kari" required>
                    </div>
                    <div class="form__box">
                        <input name="last-name" id="last-name" type="text" class="form__input" placeholder="Nordmann" required>
                    </div>
                    <div class="form__box">
                        <input name="email" id="email" type="email" class="form__input" placeholder="kari@nordmann.no" required>
                    </div>
                    <div class="form__box">
                        <input name="topic" type="text" class="form__input" placeholder="Emne..." required>
                    </div>
                    <div class="form__box">
                        <textarea name="message" id="message" class="form__textarea" placeholder="Skriv din melding her..." required></textarea>
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
        <span class="current-year"></span> © Risør Klatreklubb. All rights reserved
    </footer>
    
    <!-- JS: -->
    <script src="./js/contact.js" type="module"></script>
</body>
</html>