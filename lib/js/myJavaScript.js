$(document).ready(function(){
        $('.home_container').load('../frontend/public/view/Home/home.php', function () {
            $("#owl-demo").owlCarousel({
                items: 4,
                lazyLoad: true,
                autoPlay: true,
                navigation: true,
                navigationText: ["", ""],
                rewindNav: false,
                scrollPerPage: false,
                pagination: false,
                paginationNumbers: false,
            });

            $('#da-slider').cslider();

        });
    $(document).on('click','.product-all',function (e) {
       // $('.home_container').hide();
           $('.home_container').load("../frontend/public/view/Product/index.php", function() {
               var filterList = {

                   init: function () {

                       // MixItUp plugin
                       // http://mixitup.io
                       $('#portfoliolist').mixitup({
                           targetSelector: '.portfolio',
                           filterSelector: '.filter',
                           effects: ['fade'],
                           easing: 'snap',
                           // call the hover effect
                           onMixEnd: filterList.hoverEffect()
                       });

                   },

                   hoverEffect: function () {

                       // Simple parallax effect
                       $('#portfoliolist .portfolio').hover(
                           function () {
                               $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                               $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                           },
                           function () {
                               $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                               $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                           }
                       );

                   }

               };

               // Run the show!
               filterList.init();
               $('body').flipLightBox()

           });
           e.preventDefault();
    });

});