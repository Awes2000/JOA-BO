    <li class="sdg-card" id="sdg<?=$row['ID']?>" style="background-color: <?= $row['color'] ?>">
        <img src="/images/SDG/<?= $row['image'] ?>" alt="<?= $row['title'] ?>">
    </li>

    <?php
        include("../source/views/modal.php");
    ?>