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
                        <li><span class="filter active" data-filter="app card icon logo web">Tất cả</span></li>
                        <li><span class="filter" data-filter="app card web">nam</span></li>
                        <li><span class="filter" data-filter="icon web card">nữ</span></li>
                    </ul>
                    <div id="portfoliolist">
                        <?php foreach ($body['body'] as $pos => $item ) { ?>
                            <div class="portfolio logo1" data-cat="logo">
                                <div class="portfolio-wrapper">
                                    <a  href="details.html">
                                        <img src="../lib/images/<?= $item[ProductKey::IMAGE]?>""  alt="Image 2" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">ethnic fashion guide: sarees</a>
                                            <span class="text-category">indulge</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                       <!-- <div class="portfolio logo1" data-cat="logo">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic1.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">ethnic fashion guide: sarees</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic2.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">fasttrack: watches</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic3.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">ethnic fashion guide: dresses</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio card" data-cat="card">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic4.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">ethnic fashion guide: tees</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic5.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">ethnic fashion guide: tees</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio card" data-cat="card">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic6.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">fasttrack: watches</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic7.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">Sonor's Design</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio card" data-cat="card">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic8.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">Typography Company</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic9.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">Weatherette</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio card" data-cat="card">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic10.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">BMF</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio card" data-cat="card">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic11.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">Techlion</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio logo1" data-cat="logo">
                            <div class="portfolio-wrapper">
                                <a  href="details.html">
                                    <img src="images/sale_pic12.jpg"  alt="Image 2" />
                                </a>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">KittyPic</a>
                                        <span class="text-category">indulge</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>