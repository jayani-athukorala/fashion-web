<!DOCTYPE html>
<?php include '../db_connection.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHPJabbers.com | Free Shopping Website Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="/"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li><a href="/">Home</a></li>

                                <li class='active'><a href="/products">Products</a></li>

                                <li><a href="/checkout">Checkout</a></li>

                                <li>
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/blog">Blog</a></li>
                                        <li><a href="/testimonials">Testimonials</a></li>
                                        <li><a href="/terms">Terms</a></li>
                                    </ul>
                                </li>

                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div>
                      <img src="img/product-1-720x480.jpg" alt="" class="img-responsive wc-image">
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-4 col-xs-6">
                          <img src="img/product-1-720x480.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="col-sm-4 col-xs-6">
                          <img src="img/product-2-720x480.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="col-sm-4 col-xs-6">
                          <img src="img/product-3-720x480.jpg" alt="" class="img-responsive">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-xs-12">
                    <form action="#" method="post" class="form">
                      <h2><small><del> $999.00</del></small><strong class="text-primary">$779.00</strong></h2>

                      <br>

                      <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione molestias maxime odio. Provident ratione vero, corrupti, optio laborum aut!
                      </p>

                      <br> 

                      <div class="row">
                        <div class="col-sm-4">
                            <label class="control-label">Extra 1</label>

                                <div class="form-group">
                                <select class="form-control">
                                    <option value="0">18 gears</option>
                                    <option value="1">21 gears</option>
                                    <option value="2">27 gears</option>
                                </select>
                            </div>

                            <label class="control-label">Quantity</label>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="1">
                            </div>
                        </div>
                      </div>

                        <div class="blue-button">
                            <a href="#">Add to Cart</a>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/footer_logo.png" alt="Venue Logo">
                        </div>
                        <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellustea dictumst.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="/"><i class="fa fa-stop"></i>Home</a></li>
                                    <li><a href="/about"><i class="fa fa-stop"></i>About</a></li>
                                    <li><a href="/contact"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="/products"><i class="fa fa-stop"></i>Products</a></li>
                                    <li><a href="/testimonials"><i class="fa fa-stop"></i>Testimonials</a></li>
                                    <li><a href="/blog"><i class="fa fa-stop"></i>Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i> 212 Barrington Court New York, ABC</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">+1 333 4040 5566</a></li>
                            <li><span>Email:</span><a href="#">contact@company.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>