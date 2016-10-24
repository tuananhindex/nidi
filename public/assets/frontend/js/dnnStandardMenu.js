$(document).ready(function () {

    function HoverOver() {
        $(this).addClass('hover').find(".subLevel").slideDown("fast");
    }

    function HoverOut() {
        $(this).removeClass('hover').find(".subLevel").slideUp("fast", function() {
			$(this).hide();
	  });
    }

    var config = {
        sensitivity: 2,
        interval: 200,
        over: HoverOver,
        timeout: 0,
        out: HoverOut
    };

    $("#dnnMenu .topLevel > li.haschild").hoverIntent(config);

    $(".subLevel li.haschild").hover(HoverOver, HoverOut);

});