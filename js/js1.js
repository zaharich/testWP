/**
 * Created by TUPOLEV on 07.04.2017.
 */
jQuery(function($) {
    var heightHead = 440;
    var menuElem = $('#top-menu');
    var w = $('.col-md-9').width();
    menuElem.css({'width': w});

    $(window).scroll(function () {
        var windowTop = $(this).scrollTop();
        if(windowTop > heightHead)
            menuElem.css({
                'position': 'fixed',
                'top': '0',
                'background-color': 'rgb(0, 191, 255)',
                'width': w
            })
        else
            menuElem.css({
                'position':'relative',
                'background-color':'rgba(0, 191, 255, 0.2)'
            });
    });
});
