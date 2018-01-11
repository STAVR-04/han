$(window).scroll(function() {
if ($(this).scrollTop() > 200){  
    $('.navbar-inverse').addClass("sticky");
    $('.navbar-brand').addClass("sticky-brand");
    
  }
  else{
    $('.navbar-inverse').removeClass("sticky");
    $('.navbar-brand').removeClass("sticky-brand");
  }
});