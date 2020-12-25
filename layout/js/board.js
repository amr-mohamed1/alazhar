$("document").ready(function () {
        $('.owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            margin:20,
            nav:true,
            autoplay:true,
            autoplayTimeout:1500,
            autoplayHoverPause:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:3
                }
            }
        });


})