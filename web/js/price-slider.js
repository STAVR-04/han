// Get the right values needed for the slider
var default_value = $('.js-default-value').val();
var min_value = $('.price-slider').data('min-value');
var max_value = $('.price-slider').data('max-value');

// Call the slider with a min, max and default value. These values comes from the data above
$( ".price-slider" ).slider({
  min: min_value,
  max: max_value,
  range: "min",
  value: default_value,
  create: function() {
    // Function after the slider is created. Here we add an extra span which we use for containing the slider value.
    $('.ui-slider-handle').append('<span class="ui-slider-value">'+ default_value +'</span>');
  },
  slide: function( event, ui){
    // Function when you drag the slider. This will get the slider value and set is to the input field and below the slider-handle
    $('.js-slider-value').val(ui.value);
    $('.ui-slider-value').text(ui.value);
  }
});

//Trigger after keyup the input field with the slider value
$('.js-slider-value').keyup(function(){
  
  // Check the new value after keyup
  var new_value = $(this).val();
  
  // Define this variable. If true, the slider will be updated with the new value
  var update_slider = false;   
  
  // check if the input is a number. if not, show an alert
  if( isNaN( new_value ) ) {
    alert('Voer een nummerieke waarde in');
  }  
  // if the new input is higher than the max, the news value is equil to the max value.
  else if( new_value > max_value ) {
    new_value = max_value;
    var update_slider = true;
  }
  else if( new_value < min_value ) {
    new_value = min_value;
    var update_slider = true;
  }  
  else {
    var update_slider = true;
  }
  
  // If update_slider is true, update the slider with the new value.
  if( update_slider ){
    $( ".price-slider" ).slider("value", new_value );
    $('.ui-slider-value').text(new_value);
  }
});

// Triggers after you leave the inputput field
//If the value in the input is empty of 0, then set the inputfield to the min value
$('.js-slider-value').focusout(function(){
  
  var value = $(this).val();
  if( value == 0 ) {
    var value = min_value;
    $(this).val( value );
  }
  
});