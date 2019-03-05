$(document).ready(function () {
   $("#ldg-while-feedback").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 2,
        slideMargin: 25,
        mode: "slide",
        speed: 400,
        auto: false,
        loop: true,
        slideEndAnimation: true,
        pause: 2000,
        controls: false,
        enableTouch: true,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    item: 3,
                    slideMove: 2,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            }
        ]
    });
});