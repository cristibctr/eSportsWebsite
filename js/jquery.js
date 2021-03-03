/*jslint browser: true*/
/*global $, jQuery*/
$(document).scroll(function () {
    "use strict";
    var y = $(this).scrollTop();
    if (y > 700) {
        $('.navTop').fadeIn();
    } else {
        $('.navTop').fadeOut();
    }

});