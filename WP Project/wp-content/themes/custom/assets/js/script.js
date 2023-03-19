$(document).ready(function () {

    if ($(window).scrollTop() > 0) {
        $("header").addClass("fixed");
    } else {
        $("header").removeClass("fixed");
    }

    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $("header").addClass("fixed");
        } else {
            $("header").removeClass("fixed");
        }
    });

    $(".show-more-btn").click(function () {
        $(this)
        .addClass("hidden")
        .parents(".tabs-content")
        .find(".facilities-item")
        .removeClass("hidden");
    }); 

    $(".tab").click(function () {
        $(this)
            .addClass("active")
            .siblings()
            .removeClass("active")
            .parents(".tabs-wrap")
            .find(".tabs-content-wrap")
            .find(".tabs-content")
            .removeClass("opened")
            .eq($(this).index())
            .addClass("opened");
    });

});