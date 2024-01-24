$(document).ready(function() { 
    $('.slick-carousel').slick({
        prevArrow: '.arrow_prev',
        nextArrow: '.arrow_next',
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.slick-carousel').on('swipe', function(event, slick, direction){
        console.log(direction);
    });

});