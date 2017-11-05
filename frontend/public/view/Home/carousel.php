<div class="wrap">
    <!----start-img-cursual---->
    <div id="owl-demo" class="owl-carousel">
        <?php foreach($carousel['body'] as $item ){?>
    <div class="item" onclick="location.href='#Detail/index.php?id=<?= $item[ProductKey::PRODUCT_ID]?>';">
        <div class="cau_left">
            <img class="lazyOwl" data-src="../../../lib/images/<?= $item[ProductKey::IMAGE]?>" alt="Lazy Owl Image">
        </div>
        <div class="cau_left">
            <h4><a href="#Detail/index.php?id=<?= $item[ProductKey::PRODUCT_ID]?>"><?= $item[ProductKey::NAME]?></a></h4>
            <a href="#Detail/index.php?id=<?= $item[ProductKey::PRODUCT_ID]?>" class="btn">shop</a>
        </div>
    </div>
<?php } ?>
</div>
<!----//End-img-cursual---->
</div>