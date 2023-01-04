$(window).scroll(function () {
    const wScroll = $(this).scrollTop();

    if (wScroll > $("#card").offset().top - 400) {
        $(".animate").addClass("from-top");
    }
});
