<div class="wrap">
    <!----start-img-cursual---->
    <div id="owl-demo" class="owl-carousel">
        <?php foreach($carousel['body'] as $item ){?>
    <div class="item" onclick="location.href='details.html';">
        <div class="cau_left">
            <img class="lazyOwl" data-src="../lib/images/<?= $item[ProductKey::IMAGE]?>" alt="Lazy Owl Image">
        </div>
        <div class="cau_left">
            <h4><a href="details.html"><?= $item[ProductKey::NAME]?></a></h4>
            <a href="details.html" class="btn">shop</a>
        </div>
    </div>
<?php } ?>
</div>
<!----//End-img-cursual---->
</div>