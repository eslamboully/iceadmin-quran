/* global $ */

/* Nice Scroll
===============================*/
$(document).ready(function () {
    
    "use strict";
    
	$("html").niceScroll({
        scrollspeed: 60,
        mousescrollstep: 35,
        cursorwidth: 5,
        cursorcolor: '#e68572',
        cursorborder: 'none',
        background: 'rgba(255,255,255,0.3)',
        cursorborderradius: 3,
        autohidemode: false,
        cursoropacitymin: 0.1,
        cursoropacitymax: 1,
        zindex: "999",
        horizrailenabled: false
	});
    
    $(".rsnp-mnu > ul").niceScroll({
        scrollspeed: 60,
        mousescrollstep: 35,
        cursorwidth: 5,
        cursorcolor: '#e68572',
        cursorborder: 'none',
        background: 'rgba(255,255,255,0.3)',
        cursorborderradius: 3,
        autohidemode: false,
        cursoropacitymin: 0.1,
        cursoropacitymax: 1,
        zindex: "999",
        horizrailenabled: false
	});
   
});


$('#myModal').on('shown.bs.modal', function () {
    "use strict";
    $('#myInput').trigger('focus');
});