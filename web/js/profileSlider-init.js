$( function() {
  
  var $gallery = $('.gallery').flickity({
    pageDots: false
  });

  var flickity = $gallery.data('flickity');
  
  var $galleryNav = $('.gallery-nav');
  var $galleryNavItems = $galleryNav.find('li');
  
  $gallery.on( 'select.flickity', function() {
    $galleryNav.find('.is-selected').removeClass('is-selected');
    $galleryNavItems.eq( flickity.selectedIndex ).addClass('is-selected');
  });
  
  $galleryNav.on( 'click', 'li', function() {
    var index = $(this).index();
    $gallery.flickity( 'select', index );
  });
  
});