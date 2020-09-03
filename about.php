<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO --> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Quantum Leap Vegetarian Restaurant | Official Website | Order Online Direct</title>
    <meta name="description" content="The Best Vegetarian Restaurant in downtown of Manhattan NYC. Order Online Direct! We are open since 1974. Order direct from our official website To receive discount.
    keyword = Vegetarian Restaurant, Restaurant in downtown Manhattan NYC, Order Online Direct">
    <meta name="keywords" content="{keyword}">

    <!-- Bootstrap CSS and custom CSS --> 
    <link rel="stylesheet"href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- JjQuery, Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src=./assets/js/bootstrap.min.js></script>
    
    <!-- Fonts, Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/332bfb5ae6.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Begin HEADER -->
    <?php include_once("./assets/inc/header.php") ?>
    <!-- End HEADER -->

    <!-- Begin MAIN -->
    <main class="container-fluid row mb-4">
        <div class="col-md-3">
            <h4>Serving up vegetarian & vegan meals for over a decade,</h4>
            <p>Quantum Leap serves different cuisines and styles to fit anyone's cravings.</p>
            <p>Come in for lunch or dinner and enjoy our seitan satay with either a pumpkin or squash soup. If you like veggie burgers, come try our Portobello Pesto burger... rated one of the best veggie burgers in Manhattan.</p>
            <p>Early Riser? We are open for brunch serving morning specials including banana walnut pancakes, and our famous tofu scramble.</p>
        </div>
        <div class="col-md-9">
            <!-- IMAGE CAROUSEL -->
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./assets/img/img.jpg">
                        <div class="carousel-caption">
                            <h4>Vegan Buffalo "Chicken" Wings</h4>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#galleryModal">
                                    Check it out!
                                  </button>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- END IMAGE CAROUSEL -->
            </div>
    </main>
    <!-- End MAIN-->

    <!-- Begin Modal -->
    <!-- Modal -->
    <div class="modal-conatiner">
        <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header d-block">
                        <div class="d-flex">
                            <h4 class="modal-title" id="galleryModalLabel">Vegan Buffalo "Chicken" Wings</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <h5 class="modal-title">230 kcal</h5>
                        <h5 class="modal-title">3g Saturated Fat</h5>
                        <h5 class="modal-title">Our Vegan Buffalo "Chicken" wings, ...</h5>

                    </div>
                    <div class="modal-body">
                        <img class="d-block w-100" src="./assets/img/img.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal-->
    <!-- Subsequent modals are added through JS, i.e., appended to the div with 
    the class of modal-container-->

    <!-- Begin FOOTER -->
    <?php include_once("./assets/inc/footer.php"); ?>
    <!-- End FOOTER -->
    <script src="assets/js/script.js"></script>
</body>

</html>