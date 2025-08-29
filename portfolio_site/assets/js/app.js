
jQuery(function($) {

  $(window).on("scroll", function () {
    // header background
    if ($(window).scrollTop() > 0) {
      $(".l-header").addClass("scrolled");
    } else {
      $(".l-header").removeClass("scrolled");
    }
  });

  // burger
  $(".c-toggle-btn").on("click", function () {
    $("#navArea").toggleClass("open");
  });

  // accordion
  $(".js-accordion-title").on("click", function () {
    $(this).next().slideToggle(300);
    $(this).toggleClass("open", 300);
  });
});