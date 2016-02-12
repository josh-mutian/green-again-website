$(document).ready(function() {
    var view_height = $(window).height();
    var view_width = $(window).height();
    $('.height-full').css({
        'height': view_height
    });
    $('.height-half').css({
        'height': view_height
    })
    
    $(window).resize(function() {
        view_height = $(window).height();
        $('.height-full').css('height', view_height)
        $('.height-half').css('height', view_height / 2)
    })

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
})