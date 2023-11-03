<div class="sdg-modal" id="modal-sdg<?=$row['ID']?>">
    <button class="sdg-modal-backbutton" type="button" onclick="location.reload()">
        Ga terug
    </button>
    
    <h2 class="sdg-modal-title"><?=$row["title"]?></h2>
    <p class="sdg-modal-description"><?=$row["extra_beschrijving"]?></p>

    <div class="sdg-image-container" style="background: <?=$row['color']?>">
        <img src="/images/SDG/<?=$row['image']?>" class="sdg--modal--image">
    </div>
</div>


