<!-- 
  -- This is part of the JOA BO project
  -- Copyright (C) 2023 JOA Technologies
  -- See the LICENSE file for copying conditions.
  -->

<?php
    include_once('../source/config.php');
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
                    $result = $conn->query("SELECT * FROM SDG");
                    while($row = $result->fetch_assoc()) {
                        include('../source/views/sdg.php');
                    }
                ?>
            </ul>
            <h2>Leer Over Onze Projecten</h2>
        </section>
        <div class="arrow left">
            <i class="fas fa-caret-left"></i>
        </div>
        <div class="arrow right">
            <i class="fas fa-caret-right"></i>
        </div>
    </article>
    </body>
</html>
