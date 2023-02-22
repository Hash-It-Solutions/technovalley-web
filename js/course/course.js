$(document).scroll(function () {
    var scroll = $(this).scrollTop();
    if (scroll > 50)
        $(".second-nav").addClass("second-nav-top")
    else
        $(".second-nav").removeClass("second-nav-top")
})



$(document).ready(function() {
    $('.second-nav-link').click(function() {
      $('.second-nav-link').removeClass('active');
      
      $(this).addClass('active');
    });
  });
  
  
  
  
  $(document).scroll(function () {
    var scroll = $(this).scrollTop();
    if (scroll > 50)
        $(".second-nav-mobile").addClass("second-nav-mobile-top")
    else
        $(".second-nav-mobile").removeClass("second-nav-mobile-top")
})
