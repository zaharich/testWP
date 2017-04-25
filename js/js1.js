/**
 * Created by TUPOLEV on 07.04.2017.
 */
jQuery(function($) {
    //$('#calendar').datepicker();
    var heightHead = 440;
    var menuElem = $('#top-menu');

    $(window).scroll(function () {
        var windowTop = $(this).scrollTop();
        if(windowTop > heightHead)
            menuElem.css({'position': 'fixed', 'top': '0', 'background-color':'rgb(0, 191, 255)'});
        else
            menuElem.css({'position':'relative', 'background-color':'rgba(0, 191, 255, 0.1'});
    });
});
