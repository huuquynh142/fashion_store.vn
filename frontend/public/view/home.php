<?php
include_once('../../controller/homeControllor.php');
include_once('../../../key/ProductKey.php');
$c = new HomeControllor();
$h =$c->index();
?>
<!-- start slider -->
<?php include_once("slide.php") ?>
<!----start-cursual---->

<div class="wrap">
    <!----start-img-cursual---->
    <div id="owl-demo" class="owl-carousel">
        <?php foreach($h['body'] as $item ){?>
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
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="../lib/images/pic1.jpg" alt=""/>
                        <h3>branded shoes</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="../lib/images/pic2.jpg" alt=""/>
                        <h3>branded t-shirts</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="../lib/images/pic3.jpg" alt=""/>
                        <h3>branded tees</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="grids_of_3">
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="../lib/images/pic4.jpg" alt=""/>
                        <h3>branded bags</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="../lib/images/pic5.jpg" alt=""/>
                        <h3>ems women bag</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="../lib/images/pic6.jpg" alt=""/>
                        <h3>branded cargos</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <!-- end grids_of_3 -->
        </div>
    </div>
</div>