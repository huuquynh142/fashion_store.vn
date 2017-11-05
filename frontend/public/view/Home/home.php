<?php
include_once('../../../controller/homeControllor.php');
include_once('../../../../key/ProductKey.php');
$controllor = new HomeControllor();
$body = $controllor->index();
$slide = $controllor->slide();
$carousel = $controllor->carousel();
?>
<!-- start slider -->
<?php require_once('slide.php') ?>
<!----start-cursual---->

<?php require_once('carousel.php') ?>
<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>Sản phẩm nổi bật</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start grids_of_3 -->
            <div class="grids_of_3">
                <?php foreach ($body['body'] as $pos => $item ) { ?>
                    <?php if (($pos + 1) < count($body['body']) ) {?>
                        <?php if (($pos + 1) % 4 == 0) {?>
                            <div class="grid1_of_3">
                                <a href="details.html">
                                    <img src="../lib/images/<?= $item[ProductKey::IMAGE]?>" alt=""/>
                                    <h3><?= $item[ProductKey::NAME]?></h3>
                                    <div class="price">
                                        <h4>Giá <?= number_format($item[ProductKey::SALE_PRICE])?>  VND</h4>
                                    </div>
                                    <span class="b_btm"></span>
                                </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="grids_of_3">
                        <?php }else{ ?>
                            <div class="grid1_of_3">
                                <a href="details.html">
                                    <img src="../lib/images/<?= $item[ProductKey::IMAGE]?>" alt=""/>
                                    <h3><?= $item[ProductKey::NAME]?></h3>
                                    <div class="price">
                                        <h4>Giá <?= number_format($item[ProductKey::SALE_PRICE])?>  VND</h4>
                                    </div>
                                    <span class="b_btm"></span>
                                </a>
                            </div>
                            <?php } ?>
                    <?php }else if(($pos + 1) == count($body['body']) ){ ?>
                            <div class="grid1_of_3">
                                <a href="details.html">
                                    <img src="../lib/images/<?= $item[ProductKey::IMAGE]?>" alt=""/>
                                    <h3><?= $item[ProductKey::NAME]?></h3>
                                    <div class="price">
                                        <h4>Giá <?= number_format($item[ProductKey::SALE_PRICE])?>  VND</h4>
                                    </div>
                                    <span class="b_btm"></span>
                                </a>
                            </div>
                            <div class="clear"></div>
                            </div>
                    <?php } ?>
                <?php } ?>

            <!-- end grids_of_3 -->
        </div>
    </div>
</div>
<?php
function formatPrice(){

}
?>