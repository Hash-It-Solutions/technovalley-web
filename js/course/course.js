$(document).scroll(function () {
    var scroll = $(this).scrollTop();
    if (scroll > 50)
        $(".second-nav").addClass("second-nav-top")
    else
        $(".second-nav").removeClass("second-nav-top")
})



