window.jQuery = window.$ = require('jquery');
window.Popper = require('@popperjs/core');
window.Bootstrap = require('bootstrap');

jQuery(document).ready(function($) {

  $('.loading-wrap').hide();

  $('#search').change(function(){
    var value = $(this).val();

    $.ajax({
        type: 'GET',
        url: '/search/' +value,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function() {
          $('.loading-wrap').show();
        },
        success: function (data) {
          $('.salon-grid').html(data);

        },
        error: function( data ) {
  
        }
      });

  });

});
