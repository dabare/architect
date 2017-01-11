<?php
session_start();
require_once './db/dbConnection.php';
$_SESSION["id"] = 1;
$id = $_GET['id'];

?>


<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Architect WebSite | New Project</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<?php echo $id?>
    <div id="wrapper">
        <div id="page-wrapper" class="darkgray-bg">
        <div class="row border-bottom">
        
        </div>
            
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-10">
                    <div class="ibox">
                        <div class="ibox-content">
                            
                            <h2>Customers</h2>
                            <p>
                                Add New Project
                            </p>
                            <div class="ibox-content">
                            <form method="POST" name="register" action='Projects/insertProject.php' class="form-horizontal">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Category:</label>
                                        
                                            <div class="col-sm-7">
                                        <select class="form-control" id="category" name="category" required>
                                                <option value="Industrial">Industrial</option>
                                                <option value="Community">Community</option>
                                                <option value="Residential">Residential</option>

                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Customer ID:</label>

                                        <div class="col-sm-7"><input type='number'value="<?php echo $id;?>" disabled="disabled" class="form-control"></div>
                                            
                                            <input type="hidden" name="cusid" value="<?php echo $id;?>">
                                        </div>                                    
                                    </div>  
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group"><label class="col-sm-3 control-label">Title:</label>
                                        
                                            <div class="col-sm-7"><input type="text" name="title" required class="form-control"></div>
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label class="col-sm-3 control-label">Date:</label>
                                        <div class="col-sm-7"><input value="<?php echo date("Y-m-d");?>" type="date" name="pdate" required class="form-control"></div>
                                            </div>
                                    </div>  
                                    <div class="col-lg-6">
                                        <div class="form-group"><label class="col-sm-3 control-label">Priority:</label>
                                
                                    <div class="col-sm-7"><input placeholder="1-5" type="number" min="1" max="5" name="priority" required class="form-control"></div>
                                    </div>
                                        
                                        
                                <div class="form-group"><label class="col-sm-3 control-label">Description:</label>
                               
                                    <div class="col-sm-7"><textarea name="description" required class="form-control"></textarea>
                                     </div>
                                </div>
                                    
                                <div class="form-group"><label class="col-sm-3 control-label">Estimated Duration:</label>
                                
                                    <div class="col-sm-7"><input type="text" name="estimated_duration" required class="form-control"></div>
                                    </div>
                                    
                                    <div class="form-group"><label class="col-sm-3 control-label">Estimated Cost:</label>
                                    <div class="col-sm-7"><input type="int" name="estimated_cost" required class="form-control"></div>
                                    </div>                               
                                
                                <div class="form-group"><label class="col-sm-3 control-label">City:</label>
                                
                                    <div class="col-sm-7"><input type="text" name="city" required class="form-control"></div>
                                    </div>
                                    
                                    
                                    <div class="form-group"><label class="col-sm-3 control-label">Location:</label>
                                    <div class="col-sm-5"><input id="end" value="6.932904, 79.851476" type="text" name="location" required class="form-control"></div>
                                        <div class="col-sm-1"><input type="button" class="btn btn-xs" value="Drop Pin" onclick="dropPin()"></div>
                                    </div> 
                                    
                                    
                                     <div class="col-sm-6">
                            <div class="pull-right"><input type="submit" class="btn btn-primary" value="Save"></div>
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


<script>
    
        
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var endMarker;
var input ;
var searchBox ;
var markers = [];  
    
function initMap() {
directionsDisplay = new google.maps.DirectionsRenderer();
  var myCenter = new google.maps.LatLng(6.932904, 79.851476);
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
  endMarker = new google.maps.Marker({position:myCenter});
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
  google.maps.event.addListener(endMarker, 'dragend', function() {
    copyMarkerpositionToInput();
  });
}

function copyMarkerpositionToInput() {
  // get the position of the marker, and set it as the value of input
  document.getElementById("end").value = endMarker.getPosition().lat() +','+  endMarker.getPosition().lng();
}

function calcRoute() {
  var start = document.getElementById("start").value;
  var end = document.getElementById("end").value;
  var request = {
    origin:start,
    destination:end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}
    

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoS2uHtXLrjmwYWnUmWnFRUSV2BIrsW9g&libraries=places&callback=initMap"
    async defer></script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/notifications.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 10:52:37 GMT -->
</html>
