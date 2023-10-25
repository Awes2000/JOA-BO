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
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/main.js" defer></script>
    </head>
    <body>
        <nav class="nav">
          <img src="images/joa_logo.png" alt="JOA Logo" class="logo" />
          <ul class="list">
              <li class="listItem">Home</li>
              <li class="listItem">SDG'S</li>
              <li class="listItem">Minigame</li>
              <li class="listItem">Info</li>
          </ul>
        </nav>
        <article class="sdg-article">
            <section class="sdg-section">
                <div class="sdg-cards">
                    <?php
                        $result = $conn->query("SELECT * FROM SDG LIMIT 3");
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                            include('../source/views/sdg.php');
                        }
                    ?>
                </div>
            </section>
        </article>
    </body>
</html>
