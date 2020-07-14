<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Font-awesonme CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

    <!-- Aos CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--Flickty CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css">

    <title>Pweety Bakery</title>
</head>

<body>
    <!-- navbar -->  
    <nav class="navbar navbar-expand-lg fixed-top ">  
        <a class="navbar-brand" href="#"><img src="assets/images/Pweety Baker.svg" alt="Pweety-Baker-Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">     
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="#about">About</a> 
                </li>  
                <li class="nav-item"> 
                    <a class="nav-link " data-value="blog" href="#gallery">Gallery</a>
                </li>   
                <li class="nav-item">  
                    <a class="nav-link " data-value="team" href="#products">Products</a>
                </li>  
                <li class="nav-item"> 
                    <a class="nav-link " data-value="contact" href="#footer">Order</a>
                </li> 
            </ul> 
        </div>
    </nav>

    <!-- Header start -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h3>Hi, I'm </h3>
                <h1>Pweety Decks</h1>
                <h3 class="third">A multinational elite baker, nice to meet you</h3>

                <button class="header-button" type="button">
                    BOOK NOW
                </button>
            </div>
        </div>
    </header>
    <!-- Header main -->
    
    <!-- Main start -->
    <main>

        <!-- Accolades section -->
        <section class="accolades">
            <div class="container accolades-content">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <h3>70</h3>
                        <h4>Recipes</h4>
                    </div>

                    <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <h3>300+</h3>
                        <h4>Products</h4>
                    </div>

                    <div class="col-6 col-lg-3 col-md-6 col-sm- col-xs-6">
                        <h3>200+</h3>
                        <h4>Customers</h4>
                    </div>

                    <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <h3>10</h3>
                        <h4>Awards</h4>
                    </div>
                </div>
            </div>
        </section>


        <!-- About Section -->
        <section id="about">
            <h3> ABOUT ME </h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 about-img" data-aos="fade-up-right">
                        <img src="assets/images/Rectangle 49.svg" alt="about-img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 about-text" data-aos="fade-up-left">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptate optio totam magnam consequatur quisquam iusto laboriosam necessitatibus corporis dignissimos, at aspernatur quam quas! Molestias assumenda accusamus veniam ex accusantium?</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products">
            <h3> PRODUCTS </h3>
            <div class="product-container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up-right">
                        <img src="assets/images/Rectangle 51.svg" alt="product-1">
                        <p>Macrons</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in-right">
                        <img src="assets/images/Rectangle 52.svg" alt="product-2">
                        <p>Donot</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-right">
                        <img src="assets/images/Rectangle 53.svg" alt="product-3">
                        <p>Cupcake</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in">
                        <img src="assets/images/Rectangle 54.svg" alt="product-4">
                        <p>Cinnamon roll</p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left">
                        <img src="assets/images/Rectangle 55.svg" alt="product-5">
                        <p>Chocolate cake</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-out">
                        <img src="assets/images/Rectangle 56.svg" alt="product-6">
                        <p>Cookies</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-up">
                        <img src="assets/images/Rectangle 57.svg" alt="product-7">
                        <p>Granola bars</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up-left">
                        <img src="assets/images/Rectangle 58.svg" alt="product-8">
                        <p>Baguette</p>
                    </div>
                </div>
            </div>

            <button class="product-button" type="button">
                View more
            </button>
        </section>


        <!-- Gallery Section -->
        <section id="gallery">
            <h3>GALLERY</h3>
            <div class="gallery-container">
                <div class="main-carousel" data-flickity='{ "center-left": true ,"autoPlay":true, "contain": true, "wrapAround": true  }'>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 59.svg" alt="gallery-1">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 61.svg" alt="gallery-2">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 63.svg" alt="gallery-3">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 65.svg" alt="gallery-4">
                    </div>
                </div>

                <div class="main-carousel" data-flickity='{ "center-left": true ,"autoPlay":true, "contain": true, "wrapAround": true  }'>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 51.svg" alt="gallery-5">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 62.svg" alt="gallery-6">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 53.svg" alt="gallery-7">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 66.svg" alt="gallery-8">
                    </div>
                </div>

                <div class="main-carousel" data-flickity='{ "center-left": true ,"autoPlay":true, "contain": true, "wrapAround": true  }'>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 68.svg" alt="gallery-9">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 70.svg" alt="gallery-10">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 72.svg" alt="gallery-11">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 73.svg" alt="gallery-12">
                    </div>
                </div>

                <div class="main-carousel" data-flickity='{ "center-left": true ,"autoPlay":true, "contain": true, "wrapAround": true  }'>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 69.svg" alt="gallery-13">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 71.svg" alt="gallery-14">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 73.svg" alt="gallery-15">
                    </div>
                    <div class="carousel-cell">
                        <img src="assets/images/Rectangle 75.svg" alt="gallery-16">
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Testimonial Section -->
        <section id="testimonial">
            <h3>TESTIMONIALS</h3>
            <div class="main-carousel" data-flickity='{ "center-left": true , "contain": true, "wrapAround": true  }'>
                <div class="carousel-cell">
                    <div class="testimonial-card">
                        <div class="card-img">
                            <img src="assets/images/Ellipse 5 (1).svg" alt="Avatar">
                        </div>
                        <div class="container">
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis natus libero tempore hic nulla neque quidem, tenetur nihil, inventore laudantium in quibusdam sunt porro, facilis quam nostrum repellendus aliquam. In?</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell">
                    <div class="testimonial-card">
                        <div class="card-img">
                            <img src="assets/images/Ellipse 5 (2).svg" alt="Avatar-2">
                        </div>
                        <div class="container">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat laboriosam mollitia atque nobis quod ipsum sunt velit, quae dignissimos laudantium alias culpa excepturi veniam laborum magnam non. Recusandae, esse deserunt.</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell">
                    <div class="testimonial-card">
                        <div class="card-img">
                            <img src="assets/images/Ellipse 5.svg" alt="Avatar">
                        </div>
                        <div class="container">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, id hic iste qui fugit voluptatibus est possimus? Magni, vitae, cumque, eveniet sapiente tempora aliquid ducimus dolorum reiciendis a ex ullam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Main end -->


    <!-- Footer start -->
    <footer id="footer" class="page-footer">

        <!-- Footer Text -->
        <div class="container  text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-6 col-md-6 col-sm-12 footer-content">

                    <!-- Content -->
                    <div >
                        <h2 class="font-weight-bold">Pweety Baker</h2>

                        <h3>Contact Us</h3>
                        <p>Phone: +44 9586 00976</p>
                        <p>Email: info@PweetyBaker.com</p>
                        <p>Address: 9764 Monroe Ave. Bay Shore, NY.</p>
                        <div class="icons">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-behance-square"></i>
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6 col-md-6 col-sm-12 form-container">
                    <h3>Get In Touch</h3>
                    <form action="">
                        <input type="email" placeholder="Your email">

                        <textarea name="" id="" cols="30" rows="10" placeholder="Write a message"></textarea>

                        <button>Send Message</button>
                    </form>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Text -->
    </footer>
    <!-- Footer end -->

  


   <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<!-- Aos js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

<!-- Custom js -->
<script src="assets/js/index.js"></script>
</body>
</html>