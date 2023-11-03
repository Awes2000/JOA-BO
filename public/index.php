<!-- 
  -- This is part of the JOA BO project
  -- Copyright (C) 2023 JOA Technologies
  -- See the LICENSE file for copying conditions.
  -->

<?php
    include_once("../source/config.php");
    include_once("../source/data.php");
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>JOA B.O SDG</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/main.js" defer></script>
        <script src="https://kit.fontawesome.com/40dd9b944f.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            include("../source/views/navbar.php");
        ?>
        <section class="welkom-sdg">
            <h1>Welkom bij de SDG!</h1>
            <h2>Ontdek de Duurzame Ontwikkelingsdoelen</h2>
            <h3>Waar gaan de SDG's over?</h3>
        <p>
            De Duurzame Ontwikkelingsdoelen, of SDG's, zijn een reeks wereldwijde doelen die zijn vastgesteld door de Verenigde Naties om tegen 2030 een betere en duurzamere toekomst voor iedereen te bereiken. Ze richten zich op belangrijke kwesties zoals armoedebestrijding, onderwijs, gendergelijkheid, klimaatactie en nog veel meer. De SDG's zijn een gezamenlijke inspanning om een positieve impact te hebben op de wereld.
        </p>
        </section>
        <hr>
        <section class="section_games_cta">
            <div class="video-container">
                <video autoplay muted loop poster="images/posterpic.webp">
                    <source src="images/sdgvideo.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <a href="https://www.external-website.com" class="cta--link" rel="noreferrer">
                <button class="cta-button">Start jouw SDG avontuur</button>
            </a>
        </section>
        <section class="over" id="sdg-info">
    <header id="over">
        <h2>Over onze inzet voor de SDG's</h2>
    </header>
    <div>
        <div>
            <p>
                Wij streven ernaar om bij te dragen aan de Duurzame Ontwikkelingsdoelen (SDG's) door middel van educatieve en duurzame initiatieven. Ontdek onze toewijding aan een betere wereld en hoe jij kunt bijdragen!
            </p>
            <p>
                Ga met ons mee op een reis om de uitdagingen en kansen van de SDG's te begrijpen. Ontdek hoe je kunt bijdragen aan een duurzamere toekomst voor iedereen.
            </p>
            <p>
                Laat je inspireren door de magie van positieve verandering en de impact die we samen kunnen maken. Ontdek de kracht van collectieve actie en leer hoe je betrokken kunt raken bij onze inspanningen voor de SDG's.
            </p>
            <p>
                Samen onthullen we de geheimen van een betere toekomst en creëren we mogelijkheden voor iedereen om deel te nemen aan deze wereldwijde inspanning voor vooruitgang.
            </p>
        </div>
        <figure>
            <img src="images/sdg-inzet.webp" alt="SDG's" />
        </figure>
    </div>
</section>
<footer class="footer">
    <ul class="footer-content">
      <li>
        <a href="https://github.com/Awes2000" target="_blank">
          <i class="fab fa-github"></i>
        </a>
      </li>
      <li>
        <a href="https://linkedin.com/in/yourusername" target="_blank">
          <i class="fab fa-linkedin"></i>
        </a>
      </li>
    </ul>
    <ul class="contact-info">
      <li>School: MediaCollege Amsterdam.</li>
      <li>Module: Leerjaar 2 Periode 1.</li>
    </ul>
    <p>&copy; Awes Zoretic & Oscar Slot NVVN Beroepsopdracht. All rights reserved.</p>
  </footer>

    </body>
</html>
