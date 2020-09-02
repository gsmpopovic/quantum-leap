// Toggle mobile button 

var mobile_button = $(".navbar-toggler-icon");
var nav = $(".collapse");

// Access the button that will display for nav on mobile and tablet
mobile_button.click(function() {
        // toggle the display of this nav's elements when this button is clicked 
        nav.toggle();
    })
    // -------------------------------------------------------------------------

// Access image carousel indicators
var indicators = $(".carousel-indicators");
// Access inside of carousel, where the actual images reside 
var carousel = $(".carousel-inner");
// Access the container where modals will be stored 
var modal_container = $(".modal-conatiner");

// Append 15 images and their indicators to image carousel 

// The images, ideally, would be set inside of an object which contains each image
// and a description of it, e.g., 

// var imgs = {
//     img1: {
//         src: "./assets/img/img1.jpg",
//         descr: "Item # Description"
//     },
//     img2: {
//         src: "./assets/img/img2.jpg",
//         descr: "Item # Description"
//     },
// };

// The object would then be accessed in our for loop, i.e., 
// carousel.append(`<div class="carousel-item">
//         <img class="d-block w-100" src="$(imgs.[i].src}">
//             <div class="carousel-caption d-none d-md-block">
//                 <h5>Item ${i}</h5>
//                 <p>Item ${i} description</p>
//             </div>`);


var noImgs = 15; // Number of images in img folder 

for (var i = 1; i < noImgs; i++) {
    modal_container.append(`<div class="modal fade" id="galleryModal${i}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-block">
                    <div class="d-flex">
                        <h3 class="modal-title" id="galleryModal${i}Label">Item ${i}</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <h6 class="modal-title">Item ${i} Description</h6>
                </div>
            <div class="modal-body">
                <img class="d-block w-100" src="./assets/img/img${i}.jpg">
            </div>
            </div>
        </div>
    </div>`);
    carousel.append(`<div class="carousel-item">
    <img class="d-block w-100" src="./assets/img/img${i}.jpg">
        <div class="carousel-caption">
            <h4>Item ${i}</h4>
\            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#galleryModal${i}">
            Check it out!
            </button>
        </div>
    </div>`);
    indicators.append(`<li data-target="#carouselIndicators" data-slide-to="${i}"></li>`);

}