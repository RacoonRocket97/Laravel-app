$(document).ready(function(){

    var adClosed = false;

    var adTimer = setTimeout(function(){
        if (!adClosed) {
            $("#ad-banner")
                .hide()
                .fadeIn(800)
                .fadeTo(800, 0.50)
                .animate({ width: "300px" }, 800);
        }
    }, 2000);

    $("#minimize").click(function(){
        if ($(".ad-content").is(":visible")) {
            $(".ad-content").slideUp(500);
        } else {
            $(".ad-content").slideDown(500);
        }
    });

    $("#closeAd").click(function(){
        adClosed = true;
        clearTimeout(adTimer);
        $("#ad-banner").stop(true, true).fadeOut(600, function(){
            $(this).hide();
            $("#showAdBtn").fadeIn(400);
        });
    });

    $("#showAdBtn").click(function(){
        adClosed = false;
        $(this).hide();
        $("#ad-banner").stop(true, true).css("opacity", 1).fadeIn(600);
    });

    $("#ad-banner").hover(function(){
        if (!adClosed) {
            $(this).stop(true, true).fadeTo(400, 1);
        }
    });

});