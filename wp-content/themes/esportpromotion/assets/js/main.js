const $ = jQuery;

// Responsive menu

$(document).ready(function() {
    menu();

    $(window).resize(function() {
        menu();
    });
    
});


function menu() {
    let $width = $(window).width();
    if ($width <= 1100) {
        $('.hamburger-menu').click(function() {
            $('nav').toggleClass('open-menu');
            $('.navigation').toggleClass('menu-display-none');
            $('.hamburger-menu').toggleClass('slide-menu');
        });
    }
}