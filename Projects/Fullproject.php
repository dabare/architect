<?php
$projectid = $_GET['prid'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gallery</title>

        <link rel="stylesheet" type="text/css" href="../CSS/slide.css">
        <link rel="stylesheet" type="text/css" href="../profcss/style_theme.css">
        <link rel="stylesheet" type="text/css" href="../profcss/style.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

        <style>
            html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
        </style>

    </head>

    <body class="theme-15">

        <!--Navbar-->
        <div class="top">
            <ul class="navbar theme-d2 left-align large">

                <li><a href="../index.php#gallery" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Project Details</a></li>

            </ul>
        </div>

        <br><br><br><br>
        <div style="margin-left: 100px;"><h3>
                <?php
                require_once '../db/dbConnection.php';
                $sql = "SELECT * FROM g_project WHERE id=" . $projectid . ";";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo $row["title"];
                    }
                }
                ?>
            </h3>

        </div>
        <br><br>
        <div style="margin-left: 100px;">
            <div class="slideshow-container">

                <?php
                require_once '../db/dbConnection.php';

                $sql = "SELECT * FROM g_image WHERE g_project_id=" . $projectid . ";";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="mySlides fade">
                    
                            
                    <img src="../uploads/' . $row["url"] . '" style="width:50%; height:50vh">
                        <div class="text">' . $row["description"] . '</div>
                </div>';
                    }
                }
                ?>



                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        if (n > slides.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                    }
                </script>
            </div>
            <br>

            <div style="text-align:center">
                <?php
                $sql = "SELECT * FROM g_image WHERE g_project_id=" . $projectid . ";";
                $result = $conn->query($sql);


                $x = 1;
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '
                            <span class="dot" onclick="currentSlide(' . $x . ')"></span>
                         ';
                        $x++;
                    }
                }
                ?>
            </div>

        </div><br><br>
        <div style="margin-left: 100px;">
            <?php
            $sql = "SELECT * FROM g_project WHERE id=" . $projectid . ";";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo $row["description"];
                }
            }
            mysqli_close($conn);
            ?> 
        </div>
    </body>
</html>