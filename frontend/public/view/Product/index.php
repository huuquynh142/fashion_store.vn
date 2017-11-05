<?php
include_once('../../../controller/ProductControllor.php');
include_once('../../../../key/ProductKey.php');
$controllor = new ProductControllor();
$body = $controllor->index();
?>
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start gallery_sale  -->
            <div class="gallery1">
                <div class="container">
                    <ul id="filters" class="clearfix">
                        <li><span class="filter active" data-filter="0 1">Tất cả</span></li>
                        <li><span class="filter" data-filter="1">nam</span></li>
                        <li><span class="filter" data-filter="0">nữ</span></li>
                    </ul>
                    <div id="portfoliolist">
                        <?php foreach($body['body'] as $item ){ ?>
                            <div class="portfolio <?= $item[ProductKey::IS_MEN] ?>" data-cat="<?= $item[ProductKey::IS_MEN] ?>">
                            <div class="portfolio-wrapper">
                                <a  href="#Detail/index.php?id=<?= $item[ProductKey::PRODUCT_ID]?>">
                                    <img src="../../../lib/images/<?= $item[ProductKey::IMAGE] ?>"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title"><?= $item[ProductKey::NAME] ?></a>
                                        <span class="text-category">Xem chi tiết</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>