(function ($) {
  $(function () {
    $('.modal').modal();
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $(".dropdown-trigger1").dropdown();
    $('.carousel').carousel();
    $('.carousel.carousel-slider').carousel({ fullWidth: true });
    window.setInterval(function () {
      $('.carousel').carousel('next');
    }, 4000);
    $("#btn-search").click(function () {
      $("#nav-bar").hide();
      $("#search-bar").show();
    });
    $("#btn-search-close").click(function () {
      $("#nav-bar").show();
      $("#search-bar").hide();
    });

    $('#search').blur(function () {
      $("#nav-bar").show();
      $("#search-bar").hide();
    });


  }); // end of document ready
})(jQuery); // end of jQuery name space
