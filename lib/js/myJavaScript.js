$(document).ready(function(){
    function loadContent(hash) {
        if(hash === ''){
            hash = 'Home/home.php'
        }
        $('html , body').animate({scrollTop:0},'600','swing')
        $('.home_container').load('../view/'+ hash,function () {
            $('li').removeClass();
            $(this).addClass('active');
            if (hash === 'Home/home.php'){
                home();
            }
            if (hash === 'Product/index.php'){
                product();
            }

        })
    }
    $(window).on('hashchange',function () {
        loadContent(location.hash.slice(1))
    })
    var url = window.location.href
    var hash = url.substring(url.indexOf("#")+1)
    if (hash === url){
        hash = 'Home/home.php';
    }
    $('.home_container').load('../view/'+ hash,function () {
        $('li').removeClass();
        $(this).addClass('active');
        if (hash === 'Home/home.php'){
            home();
        }
        if (hash === 'Product/index.php'){
            product();
        }
    })

    function home() {
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
    }

    function product() {
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
    }

});