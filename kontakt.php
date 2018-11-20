
<?php
if(isset($_POST["submit"])) {
    
    $to = "info@backhuus-feuerzauber.ch";
    // $to = "adrianbetschart@hotmail.ch";
    $subject = $_POST["betreffselect"] . ": " .  $_POST["betreff"];
    $message = "Von: " . $_POST["vorname"] . " " . $_POST["nachname"] . "<br/>Email: " . $_POST["email"] . "<br/>Telefon: " . $_POST["telefon"] . "<br/><br/>Mitteilung:<br/><br/>" . $_POST["mitteilung"] . "<br/>";
    $headers = "Content-Type: text/html;charset=utf-8\r\nFrom:backhuus-feuerzauber\r\nReply-to:" . $_POST["email"];

    mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta name="description" content="Herzlich Willkommen auf der Homepage vom Backhuus Feuerzauber.">
        <meta name="keywords" content="Backhuus,Feuerzauber,Flammkuchen">
        <meta name="author" content="Adrian Betschart">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#111111">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#111111">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#111111">

        <link rel="icon" type="image/png" href="/images/favicon.png">

        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

        <link rel="stylesheet" href="style.css">

        <script async src="script.js"></script>
        <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" onload="jqueryLoaded()"></script>

        <title>Kontakt</title>
    </head>
    <body class="theme-black">
        
        <nav id="mySidenav">
            <span id="closebtn" onclick="openNav()">&times;</span>
            <a href="/">Home</a>
            <!-- <a href="galerie.html">Galerie</a>
            <a href="events.html">Events</a> -->
            <a href="/kontakt" class="active">Kontakt</a>
        </nav>
        <span id="openbtn" onclick="openNav()">&#9776</span>
        <div id="slide">
            <main>
                <div class="section" id="section-kontakt">
                    <form action="" method="POST">
                        <h1>Kontakt</h1>
                        <?php
                            if(isset($_POST["submit"])) {
                            echo "<div class='form-group'><div class='success'> Vielen Dank für Ihre Nachricht! </div></div>";                            }
                        ?>  
                        <div class="form-group">
                            <input type="text" name="vorname" placeholder="Vorname" required />
                            <input type="text" name="nachname" placeholder="Nachname" required />
                        </div>
                        <div class="form-group">
                            <input type="tel" name="telefon" placeholder="Telefonnummer" />
                            <input type="email" name="email" placeholder="E-Mail" required />
                        </div>
                        <div class="form-group">
                            <select required name="betreffselect">
                                <option disabled selected hidden value="">Betreff</option>
                                <option>Anfrage</option>
                                <option>Sonstiges</option>
                            </select>
                            <input type="text" name="betreff" placeholder="Betreff" required />
                            <br />
                            <textarea placeholder="Mitteilung" name="mitteilung" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" name="submit" value="Nachricht schicken" />
                        </div>
                    </form>
                </div>
                <footer>
                    <span class="adrianbetschart">Adrian Betschart © 2018</span> | 
                    <a class="impressum" href="/impressum">Impressum</a>
                    <a class="socialmedia" href="https://www.instagram.com/backhuusfeuerzauber/"><img src="./images/instagram.png" /></a>
                </footer>
            </main>
        </div>
    </body>
</html>