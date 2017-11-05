<?php
include_once('../../../controller/ProductControllor.php');
include_once('../../../../key/ProductKey.php');
$controllor = new ProductControllor();
$body = $controllor->getMen();
?>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <h2 class="style top">Quần áo nam</h2>
            <!-- start grids_of_3 -->
            <div class="grids_of_3">
                <?php foreach ($body['body'] as $pos => $item ) { ?>
                <?php if (($pos + 1) < count($body['body']) ) {?>
                <?php if (($pos + 1) % 4 == 0) {?>
                <div class="grid1_of_3">
                    <a href="#Detail/index.php?id=<?= $item[ProductKey::PRODUCT_ID]?>">
                        <img src="../../../lib/images/<?= $item[ProductKey::IMAGE]?>" alt=""/>
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
                        <a href="#Detail/index.php?id=<?= $item[ProductKey::PRODUCT_ID]?>">
                            <img src="../../../lib/images/<?= $item[ProductKey::IMAGE]?>" alt=""/>
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
                    <a href="#Detail/index.php?id=<?= $item[ProductKey::PRODUCT_ID]?>">
                        <img src="../../../lib/images/<?= $item[ProductKey::IMAGE]?>" alt=""/>
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