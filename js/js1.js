/**
 * Created by TUPOLEV on 07.04.2017.
 */
jQuery(function($) {

    /**
     * Меню сползает за скролом страницы
     */
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
            });
        else
            menuElem.css({
                'position':'relative',
                'background-color':'rgba(0, 191, 255, 0.2)'
            });
    });


    /**
     * Кнопка наверх на jQuery.
     */
    $('body').append('<style>\
		.scrollTop{\
			display:none; z-index:9999; position:fixed; bottom:0; padding:1em 2em; left:5%; border-radius:.2em;\
			background:rgba(0,0,0,0.2); color:#fff;\
		}\
		.scrollTop:hover{ background:rgba(0,0,0,0.6); color:#fff; text-decoration:none; }\
		.scrollTop:before{ content:"Наверх"; }\
	</style>');

    var speed      = 500,
        $scrollTop = $('<a href="#" class="scrollTop"></a>').appendTo('body');

    $scrollTop.click(function(e){
        e.preventDefault();

        $( 'html:not(:animated),body:not(:animated)' ).animate({ scrollTop: 0}, speed );
    });

    //появление
    function show_scrollTop(){
        ( $(window).scrollTop() > 300 ) ? $scrollTop.stop().fadeIn(600) : $scrollTop.stop().fadeOut(600);
    }
    $(window).scroll( function(){ show_scrollTop(); } );
    show_scrollTop();
});
