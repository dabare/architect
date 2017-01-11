   <?php
session_start();
require_once './db/dbConnection.php';
$_SESSION["id"] = 1;

?>
<head>


    <title>Print Map</title>


</head>
<body>
<div class="google-map" id="map" style="width:100%;height:1000px"></div>
</body>
    <script>
	var map;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
			zoom: 8,
			center: {lat: 7.9201753624059075, lng:  80.55397872750862} 
		  });
		setMarkers(map);
	    showLogarray();
      }

	var locations=[];
	function createArray(cat,lat,lng){
		console.log(cat+lat+lng);
		var subarr = [];
		subarr.push(cat);
		subarr.push(lat);
		subarr.push(lng);
		locations.push(subarr);
		
	}

	function showLogarray(){
		console.log(locations);
		
	}
 

	   
function setMarkers(map) {

  for (var i = 0; i < locations.length; i++) {
    var beach = locations[i];
	if(beach[0]== 'Community' ){

	var marker1 = new google.maps.Marker({
      position: {lat: beach[1], lng: beach[2]},
      map: map,
	   icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
      title: beach[0]
    });

   
	
	} else if(beach[0]== 'Industrial' ){
		
	var marker2 = new google.maps.Marker({
      position: {lat: beach[1], lng: beach[2]},
      map: map,
	  icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
      title: beach[0]
    });
    
   
	}else{

	var marker3 = new google.maps.Marker({
        position: {lat: beach[1], lng: beach[2]},
        map: map,
	    icon:'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
        title: beach[0]
    });

   
	}	
    console.log('cat:'+beach[0]+' lat '+beach[1]+' lng'+beach[2] );
  }
}
	  
	  
    </script>
	 <?php
								$sql = "SELECT category,location FROM project ;";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while ($row = $result->fetch_assoc()) {
							?>
										<script type="text/javascript">createArray( '<?php echo $row["category"].'' ?>',<?php echo $row["location"] ?> )</script>
							<?php	
									}
								
								echo '<script type="text/javascript">initMap()</script> ';
								
								
								
								}
							
							$conn->close();
?>
    
			

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoS2uHtXLrjmwYWnUmWnFRUSV2BIrsW9g&libraries=places&callback=initMap"
    async defer></script>