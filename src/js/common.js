//-- этот import нужно подключать в каждый файл, чтобы jquery работала
import $ from "jquery";
// ------------------------------------------------

$(Document).ready(function() {

    if (window.innerWidth <= 1200) {
        $(".product-card__button").hover(function() {
            $(this)
                .siblings(".product-card__price")
                .css("background-color", "#ff9cab");
        });

        $(".product-card__button").mouseout(function() {
            $(this)
                .siblings(".product-card__price")
                .css("background-color", "#ff0329");
        });
    }

});


window.onresize = function() {
    if (window.innerWidth <= 1200) {

        $(".product-card__button").hover(function() {
            $(this)
                .siblings(".product-card__price")
                .css("background-color", "#ff9cab");
        });

        $(".product-card__button").mouseout(function() {
            $(this)
                .siblings(".product-card__price")
                .css("background-color", "#ff0329");
        });

    } else {
        $(".product-card__button").hover(function() {
            $(this)
                .siblings(".product-card__price")
                .css("background-color", "transparent");
        });
        $(".product-card__button").mouseout(function() {
            $(this)
                .siblings(".product-card__price")
                .css("background-color", "transparent");
        });

    }
};