<div class="block">
    <p>
        <?php
        echo $row['title'];
        echo '<br>';
        echo $row['artist'];
        ?>
    </p>
    <div>
        <div>
            <button>
                luister
            </button>
        </div>

        <p><?php echo $row['duration']?></p>
    </div>
    <div class="single__img">
        <img src="<?= $row['image'] ?>" alt="<?= $row['artist'] ?> - <?= $row['title']?>">
    </div>
</div>