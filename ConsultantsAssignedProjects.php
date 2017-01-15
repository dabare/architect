<!DOCTYPE html>
<html>

    <?php
    session_start();
    require_once './db/dbConnection.php';



    $id = $_SESSION["id"];
    $sql = "SELECT * FROM consultants WHERE id=" . $id . ";";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $fname = $row["fname"];
            $mname = $row["mname"];
            $lname = $row["lname"];
            $age = $row["age"];
            $add_no = $row["add_no"];
            $add_street = $row["add_street"];
            $add_city = $row["add_city"];
            $email = $row["email"];
            $mobile_no = $row["mobile_no"];
            $land_no = $row["land_no"];
            $nic = $row["nic"];
            $status = $row["status"];

            $uname = $row["uname"];
            $location = $row["location"];
            $password = $row["psswd"];
        }
    }
    ?>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Architect WebSite | Edit Consultant Profile</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- FooTable -->
        <link href="css/plugins/footable/footable.core.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


    </head>

    <body>

        <div id="wrapper">

            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span>
                                    <img alt="image" style="width:55px;height:55px;" class="img-circle" src="uploads/consultant/<?php echo $_SESSION["id"]; ?>.jpeg" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $lname; ?><?php echo '_'; ?><?php echo $fname; ?></strong>
                                        </span>  </span> </a>

                            </div>

                        </li>
                        <li class="active">
                            <a href="ConsultantsAssignedProjects.php"><i class="fa fa-flask"></i> <span class="nav-label">Assigned Projects</span><span class="label label-warning pull-right"><?php echo $count; ?></span></a>

                        </li>
                        <li >
                            <a href="editConsultantProfile.php"><i class="fa fa-edit"></i> <span class="nav-label">Edit Profile</span><span class="label label-warning pull-right"><?php echo $count; ?></span></a>

                        </li>
                        


                    </ul>

                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message"></span>
                            </li>


                            <li>
                                <a href="logout.php">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>

                    </nav>


                </div>

                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Projects</h2>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
                <br>
                <div class="wrapper wrapper-content  animated fadeInRight">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="ibox">
                                <div class="ibox-content">

                                    <div class="clients-list">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-pencil"></i> Ongoing</a></li>
                                            <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-diamond"></i> Done</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tab-1" class="tab-pane active">
                                                <div class="full-height-scroll">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover">
                                                            <tbody>
                                                                <?php
                                                                $sql = "Select consultant_assign.project_id as project_id , consultant_assign.consultant_id as consultant_id , consultant_assign.description as description , project.category as category , project.title as title , project.city as city from consultant_assign left join project on consultant_assign.project_id= project.id where consultant_assign.status='Ongoing' and consultant_id='$id'";
                                                                $result = $conn->query($sql);

                                                                if ($result->num_rows > 0) {

                                                                    while ($row = $result->fetch_assoc()) {
                                                                        ?>

                                                                        <tr>

                                                                            <td><a data-toggle="tab" href="#<?= $row["project_id"] ?>-<?= $row["consultant_id"] ?>" class="client-link"><?= $row["title"] ?></a></td>
                                                                            <td><a data-toggle="tab" href="#<?= $row["project_id"] ?>-<?= $row["consultant_id"] ?>" class="client-link"><?= $row["category"] ?></a></td>
                                                                            <td><a data-toggle="tab" href="#<?= $row["project_id"] ?>-<?= $row["consultant_id"] ?>" class="client-link"><?= $row["city"] ?></a></td>
                                                                            <td><a data-toggle="tab" href="#<?= $row["project_id"] ?>-<?= $row["consultant_id"] ?>" class="client-link"><?= $row["description"] ?></a></td>

                                                                        </tr>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?> 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-2" class="tab-pane">
                                                <div class="full-height-scroll">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover">
                                                            <tbody>
                                                                <?php
                                                                $sql = "Select consultant_assign.project_id as project_id , consultant_assign.consultant_id as consultant_id , consultant_assign.description as description , project.category as category , project.title as title , project.city as city from consultant_assign left join project on consultant_assign.project_id= project.id where consultant_assign.status!='Ongoing' and consultant_id='$id'";
                                                                $result = $conn->query($sql);

                                                                if ($result->num_rows > 0) {

                                                                    while ($row = $result->fetch_assoc()) {
                                                                        ?>

                                                                        <tr>

                                                                            <td><a data-toggle="tab" href="#<?= $row["project_id"] ?>-<?= $row["consultant_id"] ?>" class="client-link"><?= $row["title"] ?></a></td>
                                                                            <td><a data-toggle="tab" href="#<?= $row["project_id"] ?>-<?= $row["consultant_id"] ?>" class="client-link"><?= $row["category"] ?></a></td>
                                                                            <td><a data-toggle="tab" href="#<?= $row["project_id"] ?>-<?= $row["consultant_id"] ?>" class="client-link"><?= $row["city"] ?></a></td>
                                                                            <td><a data-toggle="tab" href="#<?= $row["project_id"] ?>-<?= $row["consultant_id"] ?>" class="client-link"><?= $row["description"] ?></a></td>

                                                                        </tr>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?> 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="ibox ">

                                <div class="ibox-content">
                                    <div class="tab-content">
                                        <?php
                                        $sql = "Select consultant_assign.status as status , consultant_assign.consultant_id as consultant_id , consultant_assign.project_id as id from consultant_assign left join project on consultant_assign.project_id= project.id where consultant_id='$id'";
                                        $result = $conn->query($sql);


                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {

                                                $sql = "select *  from project left join customer on project.customer_id = customer.id where project.id = " . $row["id"] . "";
                                                $resultt = $conn->query($sql);


                                                if ($resultt->num_rows > 0) {

                                                    while ($roww = $resultt->fetch_assoc()) {
                                                        ?>

                                                        <div id="<?= $row["id"] ?>-<?= $row["consultant_id"] ?>" class="tab-pane ">
                                                            <div class="row m-b-lg">
                                                                <div class="col-lg-12 text-center">
                                                                    <h2><?= $roww["lname"] . " " . $roww["fname"] ?></h2>

                                                                    <div class="m-b-sm">
                                                                        <img alt="image" class="img-circle" src="uploads/customer/<?= $roww["customer_id"] ?>.jpeg"
                                                                             style="width: 62px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <strong>
                                                                        About Customer
                                                                    </strong>
                                                                    <br>
                                                                    <p>
                                                                        <i class="fa fa-phone"></i> <?= $roww["mobile_no"] ?> , <?= $roww["land_no"] ?>
                                                                        <br>
                                                                        <i class="fa fa-envelope"></i> <?= $roww["email"] ?>
                                                                        <br>
                                                                        <i class="fa fa-map-marker"></i> No. <?= $roww["add_no"] ?>, <?= $roww["add_street"] ?>, <?= $roww["add_city"] ?>.
                                                                    </p>
                                                                    <br>
                                                                    <a href="ConsultantsFullProjectDetail.php?id=<?= $row["id"] ?>" target="_blank">
                                                                        <button type="button" class="btn btn-primary btn-sm btn-block">
                                                                            View Full Project Details
                                                                        </button></a>
                                                                    <br>
                                                                    <form  action="Projects/UpdateConsultantProjectStatus.php" method="post"  class="form-horizontal">
                                                                        <input name="consultant_id" value="<?= $row["consultant_id"] ?>" type="hidden">
                                                                        <input name="project_id" value="<?= $row["id"] ?>" type="hidden">
                                                                        <?php
                                                                        if ($row["status"] == "Done") {
                                                                            echo '<input name="status" value="Ongoing" type="hidden">';
                                                                            echo '<input class="btn btn-warning" type="submit" value="Mark Ongoing">';
                                                                        } else {
                                                                            echo '<input name="status" value="Done" type="hidden">';
                                                                            echo '<input class="btn btn-warning" type="submit" value="Mark Done">';
                                                                        }
                                                                        ?>

                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                        ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
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

        <!-- FooTable -->
        <script src="js/plugins/footable/footable.all.min.js"></script>

        <!-- Page-Level Scripts -->
        <script>


            var directionsDisplay;
            var directionsService = new google.maps.DirectionsService();
            var map;
            var endMarker;
            var input;
            var searchBox;
            var markers = [];

            function initMap() {
                directionsDisplay = new google.maps.DirectionsRenderer();
                var myCenter = new google.maps.LatLng(<?php echo $location; ?>);
                var mapCanvas = document.getElementById("map");
                var mapOptions = {
                    panControl: false,
                    zoomControl: true,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false,
                    rotateControl: false,
                    center: myCenter,
                    zoom: 10,
                    mapTypeId: 'roadmap'
                };
                map = new google.maps.Map(mapCanvas, mapOptions);
                endMarker = new google.maps.Marker({position: myCenter});
                endMarker.setMap(map);
                directionsDisplay.setMap(map);





            }

            function dropPin() {
                // if any previous marker exists, let's first remove it from the map
                if (endMarker) {
                    endMarker.setMap(null);
                }
                // create the marker
                endMarker = new google.maps.Marker({
                    position: map.getCenter(),
                    map: map,
                    draggable: true,
                });
                copyMarkerpositionToInput();
                // add an event "onDrag"
                google.maps.event.addListener(endMarker, 'dragend', function () {
                    copyMarkerpositionToInput();
                });
            }

            function copyMarkerpositionToInput() {
                // get the position of the marker, and set it as the value of input
                document.getElementById("end").value = endMarker.getPosition().lat() + ',' + endMarker.getPosition().lng();
            }

            function calcRoute() {
                var start = document.getElementById("start").value;
                var end = document.getElementById("end").value;
                var request = {
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING
                };
                directionsService.route(request, function (result, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(result);
                    }
                });
            }


        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoS2uHtXLrjmwYWnUmWnFRUSV2BIrsW9g&libraries=places&callback=initMap"
        async defer></script>
    </body>
    <?php
    $conn->close();
    ?>

</html>
