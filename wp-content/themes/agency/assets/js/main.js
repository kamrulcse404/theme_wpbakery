
$('.nav-item a[href^="#"]').click(function(e) {
  e.preventDefault();
  var target = this.hash;
  $('html, body').animate({
    scrollTop: $(target).offset().top -50
  },500);
});

// animation

  new WOW().init();