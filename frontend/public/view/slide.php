<?php
include_once("../../controller/homeControllor.php");
$c = new HomeControllor();
$h =$c->index();
?>
<div id="da-slider" class="da-slider">
    <?php foreach($h['body'] as $item ){ ?>
    <div class="da-slide">
        <h2>welcome to aditii</h2>
        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="../lib/images/slider1.png" alt="image01" /></div>
    </div>
    <?php }?>
    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div>
</div>