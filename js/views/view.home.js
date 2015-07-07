/*
Name:       View - Home
Written by:   Okler Themes - (http://www.okler.net)
Version:    3.7.0
*/

function submitForm() {
  var url = $('#newsletterModalForm').attr("action");
  var formData = $('#newsletterModalForm').serialize();

  $.post(url, formData, "json")
    .done(function(d) {
      console.log( "Data Loaded: " + d );
      $('#modalNewsletterForm').modal('hide');
      $('#successModal').modal('show');
      setTimeout(function() {
        $('#successModal').modal('hide');
      }, 3000);
    })
    .fail(function() {
      alert("An error occurred. Please try it again.");
    });
};

/**
 * Vertically center Bootstrap 3 modals so they aren't always stuck at the top
 */
$(function() {
    function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');

        // Dividing by two centers the modal exactly, but dividing by three
        // or four works better for larger screens.
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }
    // Reposition when a modal is shown
    $('.modal').on('show.bs.modal', reposition);
    // Reposition when the window is resized
    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    });
});

(function($) {

  'use strict';

  /*
  Circle Slider
  */
  if ($.isFunction($.fn.flipshow)) {
    var circleContainer = $('#fcSlideshow');

    if (circleContainer.get(0)) {
      circleContainer.flipshow();

      setTimeout(function circleFlip() {
        circleContainer.data().flipshow._navigate(circleContainer.find('div.fc-right span:first'), 'right');
        setTimeout(circleFlip, 3000);
      }, 3000);
    }
  }

  /*
  Move Cloud
  */
  if ($('.cloud').get(0)) {
    var moveCloud = function() {
      $('.cloud').animate({
        'top': '+=20px'
      }, 3000, 'linear', function() {
        $('.cloud').animate({
          'top': '-=20px'
        }, 3000, 'linear', function() {
          moveCloud();
        });
      });
    };

    moveCloud();
  }

  /*
  Nivo Slider
  */
  if ($.isFunction($.fn.nivoSlider)) {
    $('#nivoSlider').nivoSlider({
      effect: 'random',
      slices: 15,
      boxCols: 8,
      boxRows: 4,
      animSpeed: 500,
      pauseTime: 3000,
      startSlide: 0,
      directionNav: true,
      controlNav: true,
      controlNavThumbs: false,
      pauseOnHover: true,
      manualAdvance: false,
      prevText: 'Prev',
      nextText: 'Next',
      randomStart: false
    });
  }

}).apply(this, [jQuery]);
