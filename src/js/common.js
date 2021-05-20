//-- этот import нужно подключать в каждый файл, чтобы jquery работала
import $ from "jquery";
// ------------------------------------------------



$(window).on("load", function() {
    $(".cssload").delay(200).fadeOut("slow");
});



import Plyr from "plyr";




$(".product-card__button").hover(function() {
    $(this).siblings(".product-card__price").css("background-color", "#ff9cab");
});

$(".product-card__button").mouseout(function() {
    $(this).siblings(".product-card__price").css("background-color", "#ff0329");
});