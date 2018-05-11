/*global $, console, next, mixitup*/

$(function () {
    "use strict";
    $(window).on("scroll", function () {
       
        if ($(window).scrollTop() > $(".shop").offset().top - 350) {
            $(".shop").addClass("shop-scroll");
        }
        
    });
});