<?php
require_once './db/dbConnection.php';
$projectid = $_GET['prid'];

$sql = "SELECT * FROM g_project WHERE id=" . $projectid . ";";
$result = $conn->query($sql);
$title = "";
$description = "";
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $description = $row["description"];
    }
}
?>
<!DOCTYPE html>
<html>


    <!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/carousel.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 10:54:53 GMT -->
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Gallery</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

        <div class="wrapper wrapper-content">
            <div class="col-lg-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?= $title ?></h5>
                    </div>
                    <div class="ibox-content ">
                        <div class="carousel slide" id="carousel2">
                            <ol class="carousel-indicators">
                                <?php
                                $sql = "SELECT * FROM g_image WHERE g_project_id=" . $projectid . ";";
                                $result = $conn->query($sql);
                                $active = "active";
                                $i = 0;
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <li data-slide-to="<?= $i ?>" data-target="#carousel2"  class="<?= $active ?>"></li>
                                        <?php
                                        if ($active == "active") {
                                            $active = "";
                                        }
                                        $i++;
                                    }
                                }
                                ?>

                            </ol>
                            <div class="carousel-inner">
                                <?php
                                $sql = "SELECT * FROM g_image WHERE g_project_id=" . $projectid . ";";
                                $result = $conn->query($sql);
                                $active = "active";
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <div class="item <?= $active ?>">
                                            <img alt="image"  class="img-responsive" src="./uploads/<?= $row["url"] ?>" style="width:800px;height:500px;">
                                            <div class="carousel-caption">
                                                <p><?= $row["description"] ?></p>
                                            </div>
                                        </div>
                                        <?php
                                        if ($active == "active") {
                                            $active = "";
                                        }
                                    }
                                }
                                ?>
                                
                            </div>
                            <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                <span class="icon-prev"></span>
                            </a>
                            <a data-slide="next" href="#carousel2" class="right carousel-control">
                                <span class="icon-next"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Description</h5>
                    </div>
                    <div class="ibox-content ">
                        <?= $description ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>


    </body>


    <!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/carousel.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 10:55:26 GMT -->
</html>

<?php
mysqli_close($conn);
?> 
