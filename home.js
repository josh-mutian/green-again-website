$(document).ready(function() {
    var view_height = $(window).height();
    $('.height-full').css({
        'height': view_height
    });
    $('.half-height').css({
        'height': view_height / 2
    })
})