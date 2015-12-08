

$(document).ready( function() {

    
  // init Isotope
  var $grid = $('.grid').isotope({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.element-item',
 percentPosition: true,
  masonry: {
    // use element for option
    columnWidth: '.grid-sizer'
  }
});
    
    
    $grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
});

    $grid.on( 'click', '.element-item', function() {
  $(this).toggleClass('gigante');
  // trigger layout after item size changes
  $grid.isotope('layout');
});
    
  // bind filter button click
  $('.filters-button-group').on( 'click', 'button', function() {      
      var filterValue = $(this).attr('data-filter');

  $grid.isotope({ filter: filterValue });
  });
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
  
});
