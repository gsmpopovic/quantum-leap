<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO --> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact | Quantum Leap Vegetarian Restaurant | Official Website | Order Online Direct</title>
    <meta name="description" content="The Best Vegetarian Restaurant in downtown of Manhattan NYC. Order Online Direct! We are open since 1974. Order direct from our official website To receive discount.
keyword = Vegetarian Restaurant, Restaurant in downtown Manhattan NYC, Order Online Direct">
    <meta name="keywords" content="{keyword}">

    <!-- Bootstrap CSS and custom CSS --> 
    <link rel="stylesheet"href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- JjQuery --> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/332bfb5ae6.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Begin HEADER -->
    <?php include_once("./assets/inc/header.php"); ?>
    <!-- End HEADER -->

    <!-- Begin MAIN -->
    <main class="container-fluid row mb-4">
        <?php require_once("messages.php")?>
        <div class="col-md-6 align-content-center">
            <form class="h-100" action="./messages.php" method="POST">
                <div class="form-group"> 
                <label for="usr">First name:</label>
                <input type="text" name="firstName" class="form-control" placeholder="Enter your first name." required>
                </div>
                <div class="form-group">
                <label for="usr">Last name:</label> 
                <input type="text" name="lastName" class="form-control" placeholder="Enter your last name." required>
                </div> 
                <div class="form-group"> 
                <label for="email">Email:</label> 
                <input type="email" name="email" class="form-control" placeholder="Enter your email." required>
                </div>
                <div class="form-group">
                <label for="comment">Message:</label>
                <textarea name="message" class="form-control"></textarea>
                </div> 
                <div class="form-group mx-auto">
                <input type="submit" name="contact" class="btn btn-primary" value="Get in touch!">
                </div> 
            </form>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.493437092883!2d-74.00091668515958!3d40.72916667933006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25991b9412289%3A0x2d468067c21f8d63!2s226%20Thompson%20St%2C%20New%20York%2C%20NY%2010012!5e0!3m2!1sen!2sus!4v1597995755394!5m2!1sen!2sus"
                width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </main>
    <!-- End MAIN-->

    <!-- Begin FOOTER -->
    <?php include_once("./assets/inc/footer.php"); ?>
    <!-- End FOOTER -->
    <script src="./assets/js/script.js"></script>

</body>

</html>