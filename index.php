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

        <!-- Google Font -->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- CSS
        ================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="indexcss/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="indexcss/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="indexcss/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="indexcss/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="indexcss/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="indexcss/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="indexjs/modernizr-2.6.2.min.js"></script>
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


            /* The Modal (background) */
            .modal {
                display: none; 
                position: fixed; 
                z-index: 1; 
                padding-top: 70px; 
                left: 0;
                top: 0;
                width: 100%; 
                height: 100%; 
                overflow: auto; 
                background-color: rgb(0,0,0); 
                background-color: rgba(0,0,0,0.4); 
            }

            /* Modal Content */
            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                border: 1px solid #888;
                width: 40%;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                -webkit-animation-name: animatetop;
                -webkit-animation-duration: 0.4s;
                animation-name: animatetop;
                animation-duration: 0.4s
            }

            /* Animation */
            @-webkit-keyframes animatetop {
                from {top:-300px; opacity:0}
            to {top:0; opacity:1}
            }

            @keyframes animatetop {
                from {top:-300px; opacity:0}
            to {top:0; opacity:1}
            }

            /* The Close Button */
            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            .close2 {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close2:hover,
            .close2:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
            .modal-header {
                padding: 2px 16px;
                background-color: #5cb85c;
                color: white;
            }

            .modal-body {padding: 2px 16px;}

            .modal-footer {
                padding: 2px 16px;
                background-color: #5cb85c;
                color: white;
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
                        <h1 id="logo"><!-- <a href="#body">ArchiTech</a></li> -->
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
                        <li><a href="#register">Register</a></li>
                        <li><a href="#login">Login</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->
                <nav class="collapse navbar-collapse navbar-left" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Architect Priyantha Premathilaka</a></li>
                    </ul>
                </nav>
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
                    <div class="col-xs-12 item active img-responsive" style="background-image: url(img/home.jpg);">
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <!-- end single slide -->

                    <!-- single slide -->
                    <div class="col-xs-12 item img-responsive" style="background-image: url(img/banner.jpg);">
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
                                <div style="background-image: url(uploads/architect/1.jpeg); width: 250px; height: 300px;">

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
                                <h3>History</h3>
                                <font size="3"><p>Archt.Priyantha premathilake established his own practice in year 2005, having serving as a Consultant Architect at Design Consortium (DCL),over period of 15 years. Although the practice has a short 
                                short history, it has completed many projects in various diciplines. The Company ispresetly involving in vast 
                                range of projects in apartments, housing projects, commercial buildings, offices, interior designs and many personalized housing.</p></font>
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
                                <font size="3"><p>Our intension is to achieve the excellence in all aspects related to the architectural practice 
                                by producing unique designs, through creativity and cost effectiveness. We list to our clients needs, analyze them systematically and would it suit social, cultural environment. 
                                We believe in customer satisfaction as a mode of advertisement.</p></font>
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
                                <font style="color:black;"><p>
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
                                </p></font>
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
                                <font style="color:black;"><p>
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
                                </p></font>
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
                        <p>Gallery contains photos of the completed photo gallery under Industrial,Community and </p>
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
                                echo '<a class="fancybox" rel="works" title="Write Your Image Caption Here" target=_blank href="Fullproject.php?prid=' . $row["id"] . '"><i class="fa fa-eye fa-lg"></i></a>';
                                echo '<h4>' . $row["title"] . '</h4>';
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
                                echo '<a class="fancybox" rel="works" title="Write Your Image Caption Here" target=_blank href="Fullproject.php?prid=' . $row["id"] . '"><i class="fa fa-eye fa-lg"></i></a>';
                                echo '<h4>' . $row["title"] . '</h4>';
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
                                echo '<a class="fancybox" rel="works" title="Write Your Image Caption Here" target=_blank href="Fullproject.php?prid=' . $row["id"] . '"><i class="fa fa-eye fa-lg"></i></a>';
                                echo '<h4>' . $row["title"] . '</h4>';
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
                                <font size="3"><p>Housing and Town Improvement Ordinance 1915<br><br>
                                    Town and Country Planning Ordinance 1945<br><br>
                                    Urban Development Authority Act 1978<br><br>
                                    UDA Planning and Building Regulations<br><br>
                                    Urban Development Authority (Special Provision) Act<br><br>
                                    Draft Regulations for Low Income Settlements<br><br>
                                    Community Building Guidelines by National Housing Development Authority (NHDA)<br></p></font>
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
                                <?php
                                    $sql = "SELECT * FROM settings WHERE id='4';";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<strong data-to="'.$row['value'].'">0</strong>';
                                            $x = $row["value"];
                                        }
                                    }
                                    
                                
                                    $x = $x+1;
                                    
                                    $sql = "UPDATE settings SET value='".$x."' WHERE id='4';";
                                    if (mysqli_query($conn, $sql)){
                                        
                                    }
                                    
                                ?>
                                <p>Visitors Counter</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="counters-item">
                                <i class="fa fa-users fa-3x"></i>
                                <?php
                                    $sql = "SELECT * FROM settings WHERE id='1';";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<strong data-to="'.$row['value'].'">0</strong>';
                                        }
                                    }
                                
                                
                                ?>
                                <p>Satisfied Clients</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="counters-item">
                                <i class="fa fa-rocket fa-3x"></i>
                                <?php
                                    $sql = "SELECT * FROM settings WHERE id='2';";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<strong data-to="'.$row['value'].'">0</strong>';
                                        }
                                    }
                                
                                
                                ?>
                                <p> Projects Delivered </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="counters-item">
                                <i class="fa fa-trophy fa-3x"></i>
                                <?php
                                    $sql = "SELECT * FROM settings WHERE id='3';";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<strong data-to="'.$row['value'].'">0</strong>';
                                        }
                                    }
                                
                                
                                ?>
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

        <?php
        
    $sql = "SELECT * FROM architect WHERE id=1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
	$add_no=$row["add_no"];
	$add_street=$row["add_street"];
	$add_city=$row["add_city"];
	$email=$row["email"];
	$mobile_no=$row["mobile_no"];
	$land_no=$row["land_no"];
        $location=$row["location"];
    }
}
        
        ?>
        
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
                            <font style="color:black;"><p>No.<?php echo $add_no;?><br>
                            <?php echo $add_street;?><br>
                            <?php echo $add_city;?>
                            </p></font>
                            <br>
                            <font style="color:black;"><p><?php echo $land_no;?> <?php echo $mobile_no;?></p></font>
                            
                        </div>
                    </div>
                    <!-- end contact address -->


                    <!-- footer social links -->
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <ul class="footer-social">
                            <font style="color:black;"><li>email: <?php echo $email;?></li></font>
                            <li></li>
                            <li></li>
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


        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>


        <!--
Register
==================================== -->		

        <section id="register" class="login">
            <div class="container">
                <div class="row mb50">

                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        <h2>Register</h2>
                        <div class="devider"><i class="fa fa-sign-in fa-lg"></i></div>
                    </div>


                    <div>
                        <center>




                            <div class="row">
                                <div class="col-lg-6 col-md-12 text-center">
                                    <div class="service-box">
                                        <div style="display:inline-block;">
                                            <img src="img/customer.jpg" style="height: 200px; width: 200px;border: 5px solid white;  border-radius:200px;" />

                                            <!-- <h1 style="color: black; font-size: 20px;">As a customer</h1> --><br><br>

                                            <center>
                                                            <!-- Open The Modal -->
                                                            <button class="btn btn-success" id="myBtn"><b>As a Customer</b></button></center>

                                                        <!-- Modal -->
                                                        <div id="myModal" class="modal">

                                                            <!-- Modal content -->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <span class="close">x</span>
                                                                    <h2>Register as a Customer</h2>

                                                                </div>
                                                                <div class="modal-body">

                                                                    <form name='register' method='post' action='Controllers/insertUser.php'>
                                                                        



                                                                        <table>
                                                                            <tr>
                                                                                <td><b>First Name:</b></td>
                                                                                <td><input type='text' name='fname' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Middle Name:</b></td>
                                                                                <td><input type='text' name='mname' /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Last Name:</b></td>
                                                                                <td><input type='text' name='lname' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Age:</b></td>
                                                                                <td><input type='int' name='age' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>NIC Number:</b></td>
                                                                                <td><input type='text' name='nic' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Address No:</b></td>
                                                                                <td><input type='text' name='add_no' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Street:</b></td>
                                                                                <td><input type='text' name='add_street' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>City:</b></td>
                                                                                <td><input type='text' name='add_city' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>E-Mail Address:</b></td>
                                                                                <td><input type="email" name="email" required/></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td><b>Mobile Number:</b></td>
                                                                                <td><input type="int" name="mobile_no" required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Land Number:</b></td>
                                                                                <td><input type="int" name="land_no" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Password:</b></td>
                                                                                <td><input type="password" name="psswd" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Confirm Password:</b></td>
                                                                                <td><input type="password" name="cnfrmpsswd" required></td>
                                                                            </tr>
                                                                            

                                                                            <tr>
                                                                                <td colspan='2' align='center'> <input type="submit" name="submit" class="button" value="Register" />
                                                                                                                        
                                                                                    <input type="reset" class="button" value="Cancel"/> </td>
                                                                            </tr>
                                                                        </table>
                                                                    
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>

                                            <div style="color: black; text-center: left; margin-left: 0px; width: 250px;height: 250px;">
                                                <b><i>Take few seconds to click here, you won't regret for it</b></i><br>
                                                <!-- <b><a style="font-size: 18px; color: #4CAF50;"><br><br>
                                                         



                                                    </a></b> -->
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <div class="service-box">
                                        <div style="display:inline-block; ">
                                            <img src="img/consultant.jpg" style="height: 200px; width: 200px;border: 5px solid white;  border-radius:200px;" />

                                            <!-- <h1 style="color: black; font-size: 20px;">As a consultant</h1> --><br><br>

                                            <center>

                                                            <!-- Open The Modal -->
                                                            <button class="btn btn-success btn-dark" id="myBtn2"><b>As a Consultant</b></button> </center>

                                                        <!-- Modal -->
                                                        <div id="myModal2" class="modal">

                                                            <!-- Modal content -->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <span class="close2">x</span>
                                                                    <h2>Register as a Consultant</h2>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form name='register' method='post' action='Controllers/insertConsultant.php'>
                                                                        <table>
                                                                            <tr>
                                                                                <td><b>First Name:</b></td>
                                                                                <td><input type='text' name='fname' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Middle Name:</b></td>
                                                                                <td><input type='text' name='mname' /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Last Name:</b></td>
                                                                                <td><input type='text' name='lname' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Age:</b></td>
                                                                                <td><input type='int' name='age' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>NIC Number:</b></td>
                                                                                <td><input type='text' name='nic' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Address No:</b></td>
                                                                                <td><input type='text' name='add_no' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Street:</b></td>
                                                                                <td><input type='text' name='add_street' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>City:</b></td>
                                                                                <td><input type='text' name='add_city' required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>E-Mail Address:</b></td>
                                                                                <td><input type="email" name="email" required/></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td><b>Mobile Number:</b></td>
                                                                                <td><input type="int" name="mobile_no" required/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Land Number:</b></td>
                                                                                <td><input type="int" name="land_no" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Category:</b></td>
                                                                                <td><select id="cat" name="cat">
                                                                                        <option>Architect</option>
                                                                                        <option>Structural Consultant</option>
                                                                                        <option>Services Consultant</option>
                                                                                        <option>Consultant</option>
                                                                                        <option>Design Developer</option>
                                                                                        <option>Draftman</option> 
                                                                                    </select></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Password:</b></td>
                                                                                <td><input type="password" name="psswd" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>Confirm Password:</b></td>
                                                                                <td><input type="password" name="cnfrmpsswd" required></td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td colspan='2' align='center'> <input type="submit" name="submit" class="button" value="Register"
                                                                                                                       /> 
                                                                                    <input type="reset" class="button" value="Cancel"/> </td>
                                                                            </tr>
                                                                        </table>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>


                                            <div style="color: black; text-align: center; margin-left: 0px; width: 250px; height: 250px;"><b><i>
                                                If you are a specialist in construction field its your chance to become a member of our family.</b></i>
                                                <!-- <b><a style="font-size: 18px; color: #4CAF50;"><br><br>
                                                        

                                                    </a></b> -->
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>


                    <br>
                </div>
            </div>

        </section>
        
            <!--
            End Login
            ==================================== -->








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
                    </div>
                </div>
            </section>

            <!--
            End Login
        ==================================== -->
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="indexjs/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="indexjs/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="indexjs/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="indexjs/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="indexjs/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="indexjs/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="indexjs/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="indexjs/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="indexjs/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="indexjs/wow.min.js"></script>
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
            <script src="indexjs/custom.js"></script>
            <script>
        
        // ==========  START GOOGLE MAP ========== //
function initialize() {
    var myLatLng = new google.maps.LatLng(<?php echo $location;?>);

    var mapOptions = {
        zoom: 14,
        center: myLatLng,
        disableDefaultUI: false,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: true,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'roadatlas']
        }
    };

    var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);


    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: 'img/location-icon.png',
        title: '',
    });

}

google.maps.event.addDomListener(window, "load", initialize);
// ========== END GOOGLE MAP ========== //
        
        </script>    
        
        
            <script type="text/javascript">
                $(function() {
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
                        submitHandler: function(form) {
                            $(form).ajaxSubmit({
                                type: "POST",
                                data: $(form).serialize(),
                                url: "process.php",
                                success: function() {
                                    $('#contact-form :input').attr('disabled', 'disabled');
                                    $('#contact-form').fadeTo("slow", 0.15, function() {
                                        $(this).find(':input').attr('disabled', 'disabled');
                                        $(this).find('label').css('cursor', 'default');
                                        $('#success').fadeIn();
                                    });
                                },
                                error: function() {
                                    $('#contact-form').fadeTo("slow", 0.15, function() {
                                        $('#error').fadeIn();
                                    });
                                }
                            });
                        }
                    });
                });
            </script>

            <script>
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                btn.onclick = function() {
                    modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                var modal2 = document.getElementById('myModal2');
                var btn2 = document.getElementById("myBtn2");
                var span = document.getElementsByClassName("close2")[0];
                btn2.onclick = function() {
                    modal2.style.display = "block";
                }
                span.onclick = function() {
                    modal2.style.display = "none";
                }
                window.onclick = function(event) {
                    if (event.target == modal2) {
                        modal2.style.display = "none";
                    }
                }

            </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoS2uHtXLrjmwYWnUmWnFRUSV2BIrsW9g&callback=initMap"
    async defer></script>
            <?php $conn->close(); ?>
    </body>
</html>
