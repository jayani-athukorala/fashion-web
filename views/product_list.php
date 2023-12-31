<!DOCTYPE html>
<?php include '../db_connection.php';
    $user_name ="Jayani Athukorala";

    $result = mysqli_query($connection, "SELECT * FROM `fc_products`");

?>

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
                                <li><a href="/admin">Home</a></li>

                                <li><a href="/emp_list">Uses List</a></li>

                                <li class='active'><a href="/product_list">Product List</a></li>

                                <li><a href="/message_list">Message List</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h2 style="color:green;"><b> Product List </b></h2> 
                       
                        <p> Use Edit button to edit each product detail...... </p>                        
                    </div>
                    <div class="col-md-2">
                        <div class="blue-button">
                            <a href="/add_product">Add Product</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>     
        
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <!-- Display table data. -->
                       <table class="col-md-12">
                        <tr style="border-bottom: 3px solid #807E7D;">
                            <th style="padding-bottom:5px;">ID</th>
                            <th style="padding-bottom:5px;">Product Name</th>
                            <th style="padding-bottom:5px;">Product Info</th>
                            <th style="padding-bottom:5px;">Price</th>
                            <th style="padding-bottom:5px;">Discounts</th>
                            <th style="padding-bottom:5px;">Actions</th>
                            
                        </tr>
                       
                        <?php
                        $count = 1;
                        while($query_data = mysqli_fetch_row($result)) {
                            echo "<tr style='border-bottom: 1px solid #B2AFAE;padding-bottom:2px;'>";
                            echo "<td style='padding-top:20px;padding-bottom:20px;'>",$count++, "</td>",
                            "<td>",$query_data[1], "</td>",
                            "<td style='width:50%;'>",$query_data[2], "</td>",
                            "<td>$",$query_data[3], "</td>",
                            "<td>$",$query_data[4], "</td>",
                            "<td><a href='#'>Edit</a> | <a href='#'>Delete</a></td>";
                            echo "</tr>";
                        }
                        
                        ?>
                        </table>
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