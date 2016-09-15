<?php
$projectid = $_GET['prid'];
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Project</title>

        <link rel="stylesheet" type="text/css" href="../CSS/slide.css">
        <meta charset="utf-8">

    </head>
    <body>
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
                    
                            
                    <img src="../uploads/' . $row["url"] . '" style="width:100%">
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