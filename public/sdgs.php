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
        <link rel="stylesheet" href="css/sdg.css">
        <script src="js/main.js" defer></script>
        <script src="https://kit.fontawesome.com/40dd9b944f.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            include("../source/views/navbar.php");
        ?>

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
            </section>
        </article>
    </body>
</html>
