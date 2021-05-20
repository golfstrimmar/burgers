import $ from "jquery";
// import "./slick.js";

$(Document).ready(function() {
    $(".slider-bunners-js").slick({
        dots: true,
        arrows: true,
        slidesToShow: 1,
        speed: 800,
        easing: "ease",
        cssEase: "linear",
        centerMode: false,
        nextArrow: $(".bunners-arrows__arrow_next"),
        prevArrow: $(".bunners-arrows__arrow_prev"),

        customPaging: function(slider, i) {
            var current = i + 1;
            current = current < 10 ? "" + current : current;

            var total = slider.slideCount;
            total = total < 10 ? "" + total : total;

            return (
                '<button type="button" role="button" tabindex="0" class="slick-dots-button">\
			<span class="slick-dots-current">' +
                "0" +
                current +
                '</span>\
			<span class="slick-dots-separator">/</span>\
			<span class="slick-dots-total">' +
                "0" +
                total +
                "</span></button>"
            );
        },
    });

    $(".slider-js-2").slick({
        dots: false,
        // arrows: false,
        slidesToShow: 4,
        speed: 800,
        easing: "ease",
        // cssEase: "linear",
        // centerMode: true,
        // autoplay: true,
        // autoplaySpeed: 2000,
        infinite: true,
        //  initialSlide: 1,
        pauseOnFocus: true,
        pauseOnHover: true,
        responsive: [{
                breakpoint: 1465,
                settings: {
                    arrows: false,
                }
            },

            {
                breakpoint: 1200,
                settings: "unslick",
            },

        ],
    });



});


window.addEventListener("resize", function() {
    if (window.innerWidth <= 1200) {
        // $(".slider-js-2").slick("unslick");
        // sliderIsLive = false;
    } else {
        $(".slider-js-2").slick({
            dots: false,
            // arrows: false,
            slidesToShow: 4,
            speed: 800,
            easing: "ease",
            // cssEase: "linear",
            // centerMode: true,
            // autoplay: true,
            // autoplaySpeed: 2000,
            infinite: true,
            //  initialSlide: 1,
            pauseOnFocus: true,
            pauseOnHover: true,
            responsive: [{
                    breakpoint: 1465,
                    settings: {
                        arrows: false,
                    },
                },

                {
                    breakpoint: 1200,
                    settings: "unslick",
                },
            ],
        });
    }
});