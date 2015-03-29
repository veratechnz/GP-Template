// All Custom JS

// Nivo  Slider Call
if (document.getElementById('slider')) {
  $(window).load(function() {

    $('#slider').nivoSlider({
      effect: 'slideInRight',                          
        animSpeed: 700,                 
        pauseTime: 4000,                
        directionNav: false,             
        controlNav: false,               
        controlNavThumbs: false,        
        pauseOnHover: false,             
        manualAdvance: false,
        prevText: 'PREV',
        nextText: 'NEXT'                
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


