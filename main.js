window.history.replaceState({}, null, '/');

// Раскрывающееся меню бургер
$(document).ready(function(){
    $('.header-burger').click(function (event) {
        $('.header-burger,.header-menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

// Слайдер с каталогом
$(document).ready(function(){
    $('.slider').slick({
        arrows:true,
        dots:false,
        slidesToShow:4,
        autoplay:false,
        speed:1000,
        autoplaySpeed:8000,
        responsive:[
            {
                breakpoint: 769,
                settings: {
                    slidesToShow:2
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow:1
                }
            }
        ]
    });
});

// Слайдер видео
$(document).ready(function(){
    $('.slider-video').slick({
        arrows:true,
        dots:false,
        slidesToShow:1,
        autoplay:false,
        speed:1000,
        autoplaySpeed:3000,
        responsive:[
            {
                breakpoint: 768,
                settings: {
                    slidesToShow:1
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow:1
                }
            }
        ]
    });
});

// Слайдер наши работы
$(document).ready(function(){
    $('.our-work-slider').slick({
        arrows:true,
        dots:false,
        slidesToShow:1,
        autoplay:true,
        speed:1000,
        autoplaySpeed:3000,
        responsive:[
            {
                breakpoint: 768,
                settings: {
                    slidesToShow:1
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow:1
                }
            }
        ]
    });
});

// Расскрывающееся меню о нас

jQuery(document).ready(function(){

    jQuery('.questions-block').on('click',function() {

        if (jQuery(this).hasClass("hidden-questions-active")) {

            jQuery(this).toggleClass("hidden-questions-active",'');

        } else {

            jQuery(".questions-block").removeClass("hidden-questions-active");
            jQuery(this).toggleClass("hidden-questions-active");

        }

    });
});

// Попап товаров

jQuery('.cart-item').on('click',function() {
    jQuery(this).parent().find('.cart-item-pop-up').addClass("cart-item-pop-up-active");
    jQuery('body').addClass("body-active");
    jQuery(this).parent().find('.slider-product').slick({
        arrows:true,
        dots:true,
        slidesToShow:1,
        autoplay: false,
        speed:1000,
        fade: true,
        autoplaySpeed:100
    });
});
jQuery('.cart-item-pop-up-content-close').on('click',function() {
    jQuery('.cart-item-pop-up').removeClass('cart-item-pop-up-active');
    jQuery('body').removeClass("body-active");
});





// Слайдер с каталогом
//
// $(document).ready(function(){
//
//     $('.slider-product').slick({
//         arrows:true,
//         dots:true,
//         slidesToShow:1,
//         autoplay: false,
//         speed:1000,
//         fade: true,
//         autoplaySpeed:100
//     });
// });






