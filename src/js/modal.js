import $ from "jquery";



$(document).ready(function() {
    let Popups = $(".popups");
    Popups.fadeOut(200);

    // $(".scroll-block-popup-add").niceScroll({
    //     cursorcolor: "#ff0329",
    //     cursorwidth: "4px",
    //     cursorborder: "",
    // });
    // $("body").css("overflow", "hidden")

    $(".popups-init-js").on("click", function() {
        let rel = $(this).attr("rel");
        let pop = $("div#" + rel);
        pop.fadeIn(200);

        $(".scroll-block-popup").niceScroll({
            cursorcolor: "#ff0329",
            cursorwidth: "4px",
        });

        $(".scroll-block-popup-add").niceScroll({
            cursorcolor: "#ff0329",
            cursorwidth: "4px",
            cursorborder: "",
        })

        $("body").css("overflow", "hidden")

    });

    $(".close-js").on("click", function() {
        $(this).closest('.popups').fadeOut(200);
        $("body").css("overflow", "visible")
    });

    $(".popups__overlay").on("click", function(e) {
        var target = $(e.target);
        if (target.is($(this))) {
            $(this).closest(".popups").fadeOut(200);
            $("body").css("overflow", "visible");
        }
    });
});