// Toggle mobile button 

var mobile_button = $(".navbar-toggler-icon");
var nav = $(".collapse");

// Access the button that will display for nav on mobile and tablet
mobile_button.click(function() {
        // toggle the display of this nav's elements when this button is clicked 
        nav.toggle();
    })
    // -------------------------------------------------------------------------

// Append 16 images and their indicators to image carousel 
for (var i = 1; i < 16; i++) {
    $(".carousel-indicators").append(`<li data-target="#carouselIndicators" data-slide-to="${i}"></li>`);
    $(".carousel-inner").append(`<div class="carousel-item">
        <img class="d-block w-100" src="./assets/img/img${i}.jpg"></div>`);
}