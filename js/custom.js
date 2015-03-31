// All Custom JS

// Nivo  Slider Call
if (document.getElementById('slider')) {
  $(window).load(function() {

    $('#slider').nivoSlider({
      effect: 'fade',                 // Specify sets like: 'fold,fade,sliceDown'
      slices: 15,                     // For slice animations
      boxCols: 8,                     // For box animations
      boxRows: 4,                     // For box animations
      animSpeed: 1200,                 // Slide transition speed
      pauseTime: 3500,                 // How long each slide will show
      startSlide: 0,                     // Set starting Slide (0 index)
      directionNav: true,             // Next & Prev navigation
      controlNav: false,                 // 1,2,3... navigation
      controlNavThumbs: false,         // Use thumbnails for Control Nav
      pauseOnHover: true,             // Stop animation while hovering
      manualAdvance: false,             // Force manual transitions
      prevText: '<i class="fa fa-chevron-left fa-4x"></i>', // Prev directionNav text
      nextText: '<i class="fa fa-chevron-right fa-4x"></i>', // Next directionNav text
      randomStart: false,             // Start on a random slide
      beforeChange: function(){},     // Triggers before a slide transition
      afterChange: function(){},         // Triggers after a slide transition
      slideshowEnd: function(){},     // Triggers after all slides have been shown
      lastSlide: function(){},         // Triggers when last slide is shown
      afterLoad: function(){}         // Triggers when slider has loaded      
    });
  }); //Window onload ends
};

$(function() {
  $('#who-we-are-accordion').on('hidden.bs.collapse', toggleChevron);
  $('#who-we-are-accordion').on('shown.bs.collapse', toggleChevron);
});

function toggleChevron(e) {
      $(e.target)
        .prev('.panel-heading')
        // .find('i.indicator')
        // .toggleClass('glyphicon-minus glyphicon-plus');
        $('#accordion .panel-heading').css('background-color', 'green');
        $('#accordion .panel-heading').removeClass('highlight');
        $(e.target).prev('.panel-heading').addClass('highlight');
}


// function setAccordionColorsExpanded() {
//   // $('.accordion').on('hidden.bs.collapse', function () {
    
//   // })
//   $('.accordion .panel-heading').click(function() {
//     $(this).collapse('toggle');
//     $(this).css('background-color', '#EE2A2B');

//     // console.log(this);
//     // if ( $(this + ' a[aria-expanded]') === 'true' ) {
//     //   $(this + ' a').click();
//     //   $(this).css('background-color', '#EE2A2B');
//     // }
//   });
// }


