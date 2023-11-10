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
    </body>
</html>
