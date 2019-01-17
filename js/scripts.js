$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop:true,
        items: 1,
        
    });

    $('.menu-open').click(function(){
        $('.main-menu').addClass("show");
    });
    $('.menu-close').click(function(){
        $('.main-menu').removeClass("show");
    });
});