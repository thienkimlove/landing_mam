var review = null;
$(document).ready(function () {
    $(".show-menu-mobile").on('click',function(){
       $("header .menu").slideToggle(200); 
    });
    review = $("#review").lightSlider({
        item: 2,
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
                    item: 2,
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
function prevSlide() {
    review.goToPrevSlide();
}
function nextSlide() {
    review.goToNextSlide();
}