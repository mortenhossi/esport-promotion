const $ = jQuery;

// Responsive menu

$(document).ready(function() {
    if ($(window).width() <= 1100) {
        $('.hamburger-menu').click(function() {
            $('nav').toggleClass('open-menu');
            $('.navigation').toggleClass('menu-display-none');
            $('.hamburger-menu').toggleClass('slide-menu');
        });
    }
});