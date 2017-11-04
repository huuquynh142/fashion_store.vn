$(document).ready(function(){
    $('.home_container').load('../frontend/public/view/home.php', function() {
    	$("#owl-demo").owlCarousel({
            items : 4,
            lazyLoad : true,
            autoPlay : true,
            navigation : true,
            navigationText : ["",""],
            rewindNav : false,
            scrollPerPage : false,
            pagination : false,
            paginationNumbers: false,
        });

        $('#da-slider').cslider();

    });

});