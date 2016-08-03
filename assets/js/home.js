$(function(){


$("#jump-button").click(function() {
    $('html, body').animate({
        scrollTop: $("nav").offset().top
    }, 500);
});

            $('.headline-hero').removeClass('tweaked');
//hero img calc
$('.hero_img').css("height",'100%');
var hero_height = $('.hero_img').height() + 39;
$('.hero_img').css("height",hero_height);



//sticky navigation
        if ($(this).scrollTop() <= hero_height) {
            $('.navbar').addClass('stickytopoff');
            $('body').addClass('unpadded');
        }
        else {
            $('.navbar').removeClass('stickytopoff');
            $('body').removeClass('unpadded');
        }


    $(window).scroll(function() {
        if ($(this).scrollTop() <= hero_height) {
            $('.navbar').addClass('stickytopoff');
            $('body').addClass('unpadded');
        }
        else {
            $('.navbar').removeClass('stickytopoff');
            $('body').removeClass('unpadded');
        }
    });
});
