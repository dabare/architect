<!DOCTYPE html>
<html>

    <?php
    session_start();
    require_once './db/dbConnection.php';


    $id = $_GET['id'];


$sql = "SELECT * FROM project WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $customer_id = $row["customer_id"];
        $category = $row["category"];
        $priority = $row["priority"];
        $pdate = $row["pdate"];
        $status = $row["status"];
        $location = $row["location"];
        $description = $row["description"];
        $progress = $row["progress"];
        $estimated_duration = $row["estimated_duration"];
        $estimated_cost = $row["estimated_cost"];
        $city = $row["city"];
        $title = $row["title"]; 
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
                        <li >
                            <a href="editConsultantProfile.php"><i class="fa fa-edit"></i> <span class="nav-label">Edit Profile</span><span class="label label-warning pull-right"><?php echo $count; ?></span></a>

                        </li>
                        <li class="active">
                            <a href="ConsultantsAssignedProjects.php"><i class="fa fa-flask"></i> <span class="nav-label">Assigned Projects</span><span class="label label-warning pull-right"><?php echo $count; ?></span></a>

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

                  <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-10">
                    <div class="ibox">
                        <div class="ibox-content">
                            
                            <h2><?=$title?></h2>
                            <p>
                                Full Project Details
                            </p>
                            <div class="ibox-content">
                            <form method="POST" name="register" action='Projects/updateProject.php' class="form-horizontal">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Category:</label>
                                        
                                            <div class="col-sm-7">
                                        <select disabled="true" class="form-control" id="category" name="category" required>
                                                <option <?php if($category=="Industrial"){echo 'selected';}?> value="Industrial">Industrial</option>
                                                <option <?php if($category=="Community"){echo 'selected';}?> value="Community">Community</option>
                                                <option <?php if($category=="Residential"){echo 'selected';}?> value="Residential">Residential</option>

                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                     
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group"><label class="col-sm-3 control-label">Title:</label>
                                        
                                            <div class="col-sm-7"><input disabled="true" value="<?=$title?>" type="text" name="title" required class="form-control"></div>
                                            </div>
                                    </div>
                                     
                                    
                                    <div class="col-lg-6">
                                        
                                        
                                        
                                <div class="form-group"><label class="col-sm-3 control-label">Description:</label>
                               
                                    <div class="col-sm-7"><textarea disabled="true" name="description" required class="form-control"><?=$description?></textarea>
                                     </div>
                                </div>
                                    
                                <div class="form-group"><label class="col-sm-3 control-label">Estimated Duration:</label>
                                
                                    <div class="col-sm-7"><input type="text" disabled="true" value="<?=$estimated_duration?>" name="estimated_duration" required class="form-control"></div>
                                    </div>
                                    
                                                                  
                                
                                <div class="form-group"><label class="col-sm-3 control-label">City:</label>
                                
                                    <div class="col-sm-7"><input type="text" disabled="true" value="<?=$city?>" name="city" required class="form-control"></div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                     
                                </div>
                                    <div class="col-lg-6">
                        <div class="google-map" id="map" style="width:100%;height:370px"></div>
                                    </div>
                                </div>
                        </form> 
                            
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
        
                <br>
                

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
