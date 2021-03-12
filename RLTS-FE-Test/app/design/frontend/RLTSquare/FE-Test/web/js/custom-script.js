define( ["jquery"],
    function($){
        "use strict";


        $(window).scroll(function () {
            // sticky navigation
            if( $(window).scrollTop() > $('.nav-sections').offset().top && !($('.nav-sections').hasClass('sticky'))){
                $('.nav-sections').addClass('sticky');
            } else if ($(window).scrollTop() == 0){
                $('.nav-sections').removeClass('sticky');
            }
            // sticky product bar
            if( $(window).scrollTop() > $('.product-add-form').offset().top && !($('.product-add-form').hasClass('visible'))){
                $('.product-sticky-wrapper').addClass('visible');
            } else if ($(window).scrollTop() == 0){
                $('.product-sticky-wrapper').removeClass('visible');
            }
        });
        // equalize heights of product
        $(document).ready(function(){

            var productheight = 0;
            $('.product-item-name').each(function(){
                if($(this).height() > productheight){
                    productheight = jQuery(this).height();
                }
            });
            $('.product-item-name').height(productheight);

        });
    }
);
