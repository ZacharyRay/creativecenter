jQuery(document).ready(function($) {

    // Hero slider

$('.main-carousel').flickity({
    // options
    contain: true,
    autoPlay: false,
    prevNextButtons: true,
    pageDots: false,
    arrowShape: { 
      x0: 10,
      x1: 70, y1: 50,
      x2: 70, y2: 40,
      x3: 70
    }
  });




// use x and y mousewheel event data to navigate flickity
function flickity_handle_wheel_event(e, flickity_instance, flickity_is_animating) {
  // do not trigger a slide change if another is being animated
  if (!flickity_is_animating) {    
    // pick the larger of the two delta magnitudes (x or y) to determine nav direction
    var direction = (Math.abs(e.deltaX) > Math.abs(e.deltaY)) ? e.deltaX : e.deltaY;
    
    console.log("wheel scroll ", e.deltaX, e.deltaY, direction);
    
    if (direction > 0) {
      // next slide
      flickity_instance.next();
    } else {
      // prev slide
      flickity_instance.previous();
    }
  }
}


// first carousel
var carousel_1 = document.querySelector(".carousel_1");
var flickity_1 = new Flickity(".carousel_1");
var flickity_1_is_animating = false;

flickity_1.on("settle", function(index) {
  console.log("Slide settle " + index);
  flickity_1_is_animating = false;
});

flickity_1.on("select", function(index) {
  console.log("Slide selected " + index);
  flickity_1_is_animating = true;
});

// detect mousewheel event within carousel element
carousel_1.onwheel = function(e) {
  flickity_handle_wheel_event(e, flickity_1, flickity_1_is_animating);
}


});

