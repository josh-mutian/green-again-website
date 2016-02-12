$(document).ready(function() {
    var view_height = $(window).height();
    var view_width = $(window).height();
    $('.height-full').css({
        'height': view_height
    });
    $('.height-half').css({
        'height': view_height
    })
    // $('.stat-tryptic').css({
    //     'width': view_width * .9,
    //     'margin-left': view_width * .05,
    //     'margin-right': view_width * .05
    // });
    $(window).resize(function() {
        view_height = $(window).height();
        $('.height-full').css('height', view_height)
        $('.height-half').css('height', view_height / 2)
    })
})