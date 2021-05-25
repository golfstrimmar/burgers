import $ from "jquery";



// .scroll-block-popup инициализируется при открытии попапа

// ===========================================================




window.onresize = function() {
    if (window.innerWidth >= 1200) {
        $(".scroll-block").niceScroll().remove();
    } else {
        $(".scroll-block").niceScroll();
    }
};

$(document).ready(function() {
    if (window.innerWidth >= 1200) {
        $(".scroll-block-popup--add").niceScroll().remove();
    } else {
        $(".scroll-block").niceScroll();
    }
});

// ========
window.onresize = function() {
    if (window.innerWidth >= 1200) {
        $("._foget-scroll").niceScroll().remove();
    } else {
        $("._foget-scroll").niceScroll();
    }
};

$(document).ready(function() {
    if (window.innerWidth >= 1200) {
        $("._foget-scroll").niceScroll().remove();
    } else {
        $("._foget-scroll").niceScroll();
    }
});