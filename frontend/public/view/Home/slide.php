<div id="da-slider" class="da-slider">
    <?php foreach($slide['body'] as $item ){ ?>
    <div class="da-slide">
        <h2><?=$item[ProductKey::NAME]?> </h2>
        <p><?=$item[ProductKey::COMMENT] ?></p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="../lib/images/<?= $item[ProductKey::IMAGE] ?>" alt="image01" /></div>
    </div>
    <?php }?>
    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div>
</div>