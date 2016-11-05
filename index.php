<?php
require_once './db/dbConnection.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta charec set -->
        <meta charset="utf-8">
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- Page Title -->
        <title>Architect Web-Site</title>		
        <!-- Meta Description -->
        <meta name="description" content="Architect">
        <meta name="keywords" content="">
        <meta name="author" content="4t2">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- CSS
        ================================================== -->
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="CSS/font-awesome.min.css">
        <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <!-- jquery.fancybox  -->
        <link rel="stylesheet" href="CSS/jquery.fancybox.css">
        <!-- animate -->
        <link rel="stylesheet" href="CSS/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="CSS/main.css">
        <!-- media-queries -->
        <link rel="stylesheet" href="CSS/media-queries.css">

        <!-- Modernizer Script for old Browsers -->
        <script src="JS/modernizr-2.6.2.min.js"></script>
        <style>
            #loginDiv{
                height: 200px; 
                width: 450px; 
                border: 3px solid white; 
                border-radius:13px;
            }	


            #loginDiv input[type=text] ,#loginDiv input[type=password] {
                padding: 5px 25px;
                margin: 9px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 5px 35px;
                margin: 23px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type=reset] {
                background-color: #ff6600;
                color: white;
                padding: 5px 35px;
                margin: 23px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }


            input[type=submit]:hover {
                background-color: #45a049;
            }
            input[type=reset]:hover {
                background-color: #cc6600;
            }

            label,input{
                font-family: Verdana,sans-serif;
                font-weight: bold;
                font-size: 15px;
            }

            label{
                color: black;
            }
        </style>
    </head>

    <body id="body">

        <!-- preloader -->
        <div id="preloader">
            <img style="height: 100px; width: 100px;" src="img/preloader1.gif" alt="Preloader">
        </div>
        <!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <a class="navbar-brand" href="#body">
                        <h1 id="logo">
                            <img src="" alt="">
                        </h1>
                    </a>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#awards">Awards</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#regulations">Regulations</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#login">Login</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->



        <!--
        Home Slider
        ==================================== -->

        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Indicators bullet -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <!-- End Indicators bullet -->				

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <!-- single slide -->
                    <div class="item active" style="background-image: url(img/home.jpg);">
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <!-- end single slide -->

                    <!-- single slide -->
                    <div class="item" style="background-image: url(img/banner.jpg);">
                        <div class="carousel-caption">
                            <!--
                                    <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Team</span>!</h2>
                                    <h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/creative</span> one page template.</h3>
                                    <p data-wow-duration="500ms" class="wow slideInRight animated">We are a team of professionals</p>
                                    
                                    <ul class="social-links text-center">
                                            <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                            <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                            <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                                    </ul>
                            -->
                        </div>
                    </div>


                    <!-- end single slide -->

                </div>
                <!-- End Wrapper for slides -->

            </div>
        </section>

        <!--
        End Home SliderEnd
        ==================================== -->

        <!--
        About
        ==================================== -->

        <section id="about" class="about">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                        <h2>The Architect</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <!-- service item -->
                    <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                        <div class="service-item">
                            <div class="service-desc">
                                <div style="background-image: url(img/pic.jpg); width: 250px; height: 300px;">

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end service item -->

                    <!-- service item -->
                    <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-pencil fa-2x"></i>
                            </div>

                            <div class="service-desc">
                                <h3>Biography</h3>
                                <p>Mr.P.H.K.P.L.Prematilaka was born in Colombo,Sri Lanka in 1970.
                                    he entered the University of Colombo and graduated Bachelor of Science (BSc) in Physics in the year 1996.
                                    His primary calling, however, was elsewhere.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->

                    <!-- service item -->
                    <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-github fa-2x"></i>
                            </div>

                            <div class="service-desc">
                                <h3>Philosophy</h3>
                                <p>We are an architectural firm in the business of recreating the space.
                                    We value our clients' dreams and the life style which we align with our vision,
                                    To be the region best valued partner in materializing the dreams of recreating the space.
                                    In realizing the vision we truly believe and committed to our mission that,
                                    To create beyond the expectations of the client s sensibility with the combined effort of professionalism and creativity in balancing the art, comfort and security.
                                    We see the beauty of silence against the noise, emptiness against the congestion, 
                                    simplicity against complexity and we love to share the experience with our clients.
                                    We enjoy the climate but do not let it torture us.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->

                </div>
            </div>
        </section>

        <!--
        End About
        ==================================== -->



        <!--
        Awards
        ==================================== -->

        <section id="awards" class="awards" style="background-color: lightgray;;">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                        <h2>Awards</h2>
                        <div class="devider"><i class="fa fa-trophy fa-lg"></i></div>
                    </div>

                    <!-- service item -->
                    <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-trophy  fa-2x"></i>
                            </div>

                            <div class="service-desc">
                                <h3>Awards</h3>
                                <p>




                                    <?php
                                    $sql = "SELECT * FROM award WHERE category='Awards';";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row

                                        while ($row = $result->fetch_assoc()) {

                                            echo $row["title"];
                                            echo '<br>';
                                            echo $row["description"];
                                            echo '<br><br>';
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->

                    <!-- service item -->
                    <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                        <div class="service-item">

                            <div class="service-desc">

                            </div>
                        </div>
                    </div>
                    <!-- end service item -->

                    <!-- service item -->
                    <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-shield fa-2x"></i>
                            </div>

                            <div class="service-desc">
                                <h3>Academic qualifications</h3>
                                <p>
                                    <?php
                                    $sql = "SELECT * FROM award WHERE category='Academic Qualifications';";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row

                                        while ($row = $result->fetch_assoc()) {

                                            echo $row["title"];
                                            echo '<br>';
                                            echo $row["description"];
                                            echo '<br><br>';
                                        }
                                    }
                                    
                                    ?>
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- end service item -->

                </div>
            </div>
        </section>

        <!--
        End Awards
        ==================================== -->


        <!--
        Gallery
        ==================================== -->

        <section id="gallery" class="works clearfix">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center">
                        <h2>Gallery</h2>
                        <div class="devider"><i class="fa fa-camera fa-lg"></i></div>
                    </div>

                    <div class="sec-sub-title text-center">
                        <p>Gallery contains photos of the completed photo gallery under Industrial,Community and Residential </p>
                    </div>

                    <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                        <ul class="text-center">
                            <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                            <li><a href="javascript:;" data-filter=".residential" class="filter">Residential</a></li>
                            <li><a href="javascript:;" data-filter=".community" class="filter">Community</a></li>
                            <li><a href="javascript:;" data-filter=".industrial" class="filter">Industrial</a></li>

                        </ul>
                    </div>

                </div>
            </div>

            <div class="project-wrapper">
                    <?php
                    $sql = "SELECT * FROM g_project WHERE category='Residential' AND status='Active';";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<figure class="mix work-item residential">';
                    $sql2 = 'SELECT url FROM g_image WHERE id = ( SELECT MIN(id) FROM g_image WHERE g_project_id=' . $row["id"] . ');';
                    $result2 = $conn->query($sql2);

                        if ($result2->num_rows > 0) {
                            // output data of each row
                            while ($row2 = $result2->fetch_assoc()) {
                                echo '<img src="./uploads/' . $row2["url"] . '"  alt="" style="width:600px;height:200px">';
                                echo '<figcaption class="overlay">';
                                echo '<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="./Projects/Fullproject.php?prid=' . $row["id"] . '"><i class="fa fa-eye fa-lg"></i></a>';
                                echo '<h4>'  .$row["title"].  '</h4>';
                                echo '</figcaption>';
                            }
                        }
                        echo '</figure>';
                        }
                    }
                
                    ?> 
                

                <?php
                    $sql = "SELECT * FROM g_project WHERE category='Community' AND status='Active';";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<figure class="mix work-item community">';
                    $sql2 = 'SELECT url FROM g_image WHERE id = ( SELECT MIN(id) FROM g_image WHERE g_project_id=' . $row["id"] . ');';
                    $result2 = $conn->query($sql2);

                        if ($result2->num_rows > 0) {
                            // output data of each row
                            while ($row2 = $result2->fetch_assoc()) {
                                echo '<img src="./uploads/' . $row2["url"] . '"  alt="" style="width:600px;height:200px">';
                                echo '<figcaption class="overlay">';
                                echo '<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="./Projects/Fullproject.php?prid=' . $row["id"] . '"><i class="fa fa-eye fa-lg"></i></a>';
                                echo '<h4>' .$row["title"]. '</h4>';
                                echo '</figcaption>';
                            }
                        }
                        echo '</figure>';
                        }
                    }
                
                    ?> 

                <?php
                    $sql = "SELECT * FROM g_project WHERE category='Industrial' AND status='Active';";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<figure class="mix work-item industrial">';
                    $sql2 = 'SELECT url FROM g_image WHERE id = ( SELECT MIN(id) FROM g_image WHERE g_project_id=' . $row["id"] . ');';
                    $result2 = $conn->query($sql2);

                        if ($result2->num_rows > 0) {
                            // output data of each row
                            while ($row2 = $result2->fetch_assoc()) {
                                echo '<img src="./uploads/' . $row2["url"] . '"  alt="" style="width:600px;height:200px">';
                                echo '<figcaption class="overlay">';
                                echo '<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="./Projects/Fullproject.php?prid=' . $row["id"] . '"><i class="fa fa-eye fa-lg"></i></a>';
                                echo '<h4>' .$row["title"]. '</h4>';
                                echo '</figcaption>';
                            }
                        }
                        echo '</figure>';
                        }
                    }
                
                    ?> 


               
            </div>


        </section>

        <!--
        End Gallery
        ==================================== -->



        <!--
        Regulations
        ==================================== -->

        <section id="regulations" class="regulations">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                        <h2>Regulations</h2>
                        <div class="devider"><i class="fa fa-plus fa-lg"></i></div>
                    </div>

                    <!-- service item -->
                    <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">
                        <div class="service-item">
                            <div class="service-desc">

                            </div>
                        </div>
                    </div>
                    <!-- end service item -->

                    <!-- service item -->
                    <div class="col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-pencil fa-2x"></i>
                            </div>

                            <div class="service-desc">
                                <p>Housing and Town Improvement Ordinance 1915<br><br>
                                    Town and Country Planning Ordinance 1945<br><br>
                                    Urban Development Authority Act 1978<br><br>
                                    UDA Planning and Building Regulations<br><br>
                                    Urban Development Authority (Special Provision) Act<br><br>
                                    Draft Regulations for Low Income Settlements<br><br>
                                    Community Building Guidelines by National Housing Development Authority (NHDA)<br><br></p>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->

                    <!-- service item -->
                    <div class="col-md-3 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                        <div class="service-item">

                            <div class="service-desc">
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->

                </div>
            </div>
        </section>

        <!--
        End Regulations
        ==================================== -->



        <!--
Some fun facts
==================================== -->		

        <section id="facts" class="facts">
            <div class="parallax-overlay">
                <div class="container">
                    <div class="row number-counters">

                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                            <h2>Some Facts</h2>
                            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                        </div>

                        <!-- first count item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="counters-item">
                                <i class="fa fa-clock-o fa-3x"></i>
                                <strong data-to="3200">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p>Visitors Counter</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="counters-item">
                                <i class="fa fa-users fa-3x"></i>
                                <strong data-to="310">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="counters-item">
                                <i class="fa fa-rocket fa-3x"></i>
                                <strong data-to="270">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p> Projects Delivered </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="counters-item">
                                <i class="fa fa-trophy fa-3x"></i>
                                <strong data-to="6454">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p>Awards Won</p>
                            </div>
                        </div>
                        <!-- end first count item -->

                    </div>
                </div>
            </div>
        </section>

        <!--
        End Some fun facts
        ==================================== -->


        <!--
Contact Us
==================================== -->		

        <section id="contact" class="contact">
            <div class="container">
                <div class="row mb50">

                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        <h2>Let’s Discuss</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                        <p>We would like to here from you</p>
                    </div>

                    <!-- contact address -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                        <div class="contact-address">
                            <h3>Our Address </h3>
                            <p>45, Koswaththa</p>
                            <p>Baththaramulla</p>
                            <p>01122497787</p>
                        </div>
                    </div>
                    <!-- end contact address -->

                    <!-- contact form -->
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="contact-form">
                            <h3>Say hello!</h3>
                            <form action="#" id="contact-form">
                                <div class="input-group name-email">
                                    <div class="input-field">
                                        <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="input-field">
                                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                                </div>
                                <div class="input-group">
                                    <input type="submit" id="form-submit" class="pull-right" value="Send message">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end contact form -->

                    <!-- footer social links -->
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <ul class="footer-social">
                            <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
                            <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                            <li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
                            <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
                        </ul>
                    </div>
                    <!-- end footer social links -->

                </div>
            </div>

            <!-- Google map -->
            <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms">

            </div>
            <!-- End Google map -->

        </section>

        <!--
        End Contact Us
        ==================================== -->





        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="footer-single">

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="footer-single">
                            <h6>Subscribe </h6>
                            <form action="#" class="subscribe">
                                <input type="text" name="subscribe" id="subscribe">
                                <input type="submit" value="&#8594;" id="subs">
                            </form>
                            <p>description</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="footer-single">
                            <h6>Explore</h6>
                            <ul>
                                <li><a href="#">Inside Us</a></li>
                                <li><a href="#">Flickr</a></li>
                                <li><a href="#">Google</a></li>
                                <li><a href="#">Forum</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="footer-single">
                            <h6>Support</h6>
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Market Blog</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Pressroom</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </footer>

        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

        <!--
        Login
        ==================================== -->		

        <section id="login" class="login">
            <div class="container">
                <div class="row mb50">

                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        <h2>Login to your Account</h2>
                        <div class="devider"><i class="fa fa-sign-in fa-lg"></i></div>
                    </div>


                    <div>
                        <center>
                            <div id="loginDiv" >

                                <form action="loginAction.php" method="post">
                                    <br>
                                    <label for="uname">Username: </label><input type="text" name="usrname"/>
                                    <br>
                                    <label for="uname">Password: </label><input type="password" name="pswrd"/>
                                    <br>
                                    <input type="submit" name="login" value="Login"/>
                                    <input type="reset" value="Cancel"/>
                                </form>
                                <br>
                            </div>
                        </center>
                    </div>


                    <!--
                    End Login
                    ==================================== -->
                    <!-- Essential jQuery Plugins
                    ================================================== -->
                    <!-- Main jQuery -->
                    <script src="JS/jquery-1.11.1.min.js"></script>
                    <!-- Single Page Nav -->
                    <script src="JS/jquery.singlePageNav.min.js"></script>
                    <!-- Twitter Bootstrap -->
                    <script src="JS/bootstrap.min.js"></script>
                    <!-- jquery.fancybox.pack -->
                    <script src="JS/jquery.fancybox.pack.js"></script>
                    <!-- jquery.mixitup.min -->
                    <script src="JS/jquery.mixitup.min.js"></script>
                    <!-- jquery.parallax -->
                    <script src="JS/jquery.parallax-1.1.3.js"></script>
                    <!-- jquery.countTo -->
                    <script src="JS/jquery-countTo.js"></script>
                    <!-- jquery.appear -->
                    <script src="JS/jquery.appear.js"></script>
                    <!-- Contact form validation -->
                    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
                    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
                    <!-- Google Map -->
                    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
                    <!-- jquery easing -->
                    <script src="JS/jquery.easing.min.js"></script>
                    <!-- jquery easing -->
                    <script src="JS/wow.min.js"></script>
                    <script>
                        var wow = new WOW({
                            boxClass: 'wow', // animated element css class (default is wow)
                            animateClass: 'animated', // animation css class (default is animated)
                            offset: 120, // distance to the element when triggering the animation (default is 0)
                            mobile: false, // trigger animations on mobile devices (default is true)
                            live: true        // act on asynchronously loaded content (default is true)
                        }
                        );
                        wow.init();
                    </script> 
                    <!-- Custom Functions -->
                    <script src="JS/custom.js"></script>

                    <script type="text/javascript">
                        $(function () {
                            /* ========================================================================= */
                            /*	Contact Form
                             /* ========================================================================= */

                            $('#contact-form').validate({
                                rules: {
                                    name: {
                                        required: true,
                                        minlength: 2
                                    },
                                    email: {
                                        required: true,
                                        email: true
                                    },
                                    message: {
                                        required: true
                                    }
                                },
                                messages: {
                                    name: {
                                        required: "come on, you have a name don't you?",
                                        minlength: "your name must consist of at least 2 characters"
                                    },
                                    email: {
                                        required: "no email, no message"
                                    },
                                    message: {
                                        required: "um...yea, you have to write something to send this form.",
                                        minlength: "thats all? really?"
                                    }
                                },
                                submitHandler: function (form) {
                                    $(form).ajaxSubmit({
                                        type: "POST",
                                        data: $(form).serialize(),
                                        url: "process.php",
                                        success: function () {
                                            $('#contact-form :input').attr('disabled', 'disabled');
                                            $('#contact-form').fadeTo("slow", 0.15, function () {
                                                $(this).find(':input').attr('disabled', 'disabled');
                                                $(this).find('label').css('cursor', 'default');
                                                $('#success').fadeIn();
                                            });
                                        },
                                        error: function () {
                                            $('#contact-form').fadeTo("slow", 0.15, function () {
                                                $('#error').fadeIn();
                                            });
                                        }
                                    });
                                }
                            });
                        });
                    </script>
        <?php $conn->close();?>
</body>
                    </html>
