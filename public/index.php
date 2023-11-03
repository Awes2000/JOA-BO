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
        <nav class="nav">
          <img src="images/joa-logo-test.webp" alt="JOA Logo" class="logo" />
          <ul class="list">
              <li class="listItem">Home</li>
              <li class="listItem">SDG'S</li>
              <li class="listItem">Minigame</li>
              <li class="listItem">Info</li>
          </ul>
        </nav>
        <article class="sdg-article">
            <section class="sdg-section">
                <ul class="sdg-card-list">
                    <?php

                        $rows = get_sdgs();
                        foreach($rows as $row) {
                            include('../source/views/sdg.php');
                        }
                    ?>
                </ul>
                <h2>Leer Over Onze Projecten</h2>
            </section>

            <!-- Removed until carousel system has been added
            <div class="arrow left">
                <i class="fas fa-caret-left"></i>
            </div>
            <div class="arrow right">
                <i class="fas fa-caret-right"></i>
            </div>
            -->
        </article>
        <section class="section_games_cta">
            <div class="video-container">
                <video autoplay muted loop poster="images/posterpic.webp">
                    <source src="images/sdgvideo.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <a href="https://www.external-website.com" class="cta-link" rel="noreferrer">
                <button class="cta-button">Visit External Website</button>
            </a>
        </section>
<<<<<<< HEAD
        <div class="arrow left">
            <i class="fas fa-caret-left"></i>
        </div>
        <div class="arrow right">
            <i class="fas fa-caret-right"></i>
        </div>
    </article>
<section class="section_games_cta">
    <div class="video-container">
        <video autoplay muted loop poster="images/posterpic.webp">
            <source src="images/sdgvideo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
<a href="https://www.external-website.com" class="cta--link">
        <button class="cta-button">Start jouw SDG avontuur!</button>
    </a>
</section>
<section class="sdg-informatiepage"></section>

=======
>>>>>>> 08d419c8775b11ac5e3c62d8f42aa491bd6199ea
    </body>
</html>
