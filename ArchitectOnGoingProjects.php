<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Architect</title>
<link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
<link rel="stylesheet" type="text/css" href="profcss/style_theme.css">
<link rel="stylesheet" type="text/css" href="profcss/style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profcss/opensans.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script  
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsvi-qzINUwnFIkDLm11VPdBOmAVH2oR4&callback=initMap">
    </script>
</head>
 <style>
      #map {
        height: 600px;
        width: 100%;
       }
    </style>
<body bgcolor="grey" class="theme-15">

<!--Navbar-->
<div class="top">
	<ul class="navbar theme-d2 left-align large">

		<li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Architect</a></li>
		
	</ul>
</div>

<!--Page Container-->
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 10px">
	<!--The Grid-->
	<div class="row">

		<!-- left panel -->
                <ul id="navigationbarEdit">
            <li><a id="editItem" href="ArchitectNotification.php">Notification</a></li>
            <li><a id="activeEdit" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
            <li><a id="editItem" href="ArchitectManageProjects.php">Gallery</a></li>
            <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
            <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="logout.php">Logout</a></li>

            </ul>

        <div style="margin-left:30%;padding:1px 16px;height:1000px;"><br><br>

            <h1><b><center>On Going Projects</center></b></h1>

            <table>
                <tr>
                    <th style="background: #fd7567;width: 35%;"><h2><center>Industrial</center></h2></th>
                    <th style="background: #00e64d;width: 35%;"><h2><center>Residential</center></h2></th>
                    <th style="background: #6991fd;width: 35%;"><h2><center>Community</center></h2></th>
                </tr>


                <tr>

                    <?php
                    require_once './db/dbConnection.php';

                    $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det  , project.city AS city , project.progress/100 as prog , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Industrial' AND project.progress!=100 AND project.architect_id='" . $_SESSION["id"] . "' AND project.status='Active' ORDER BY city ASC;";
                    $result = $conn->query($sql);

                    echo '<td valign="top">';
                    echo '<ul id="projlist">';
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                            echo '<li ><a id = "proj" href = "ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["city"] . '<div>' . $row["det"] . '</div><br><meter style = "width: 100%;" value = "' . $row["prog"] . '"></meter></a></li>';
                            echo '<li class = "brk"></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</td>';



                    $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det  , project.city AS city , project.progress/100 as prog , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Residential' AND project.progress!=100 AND project.architect_id='" . $_SESSION["id"] . "' AND project.status='Active' ORDER BY city ASC;";
                    $result = $conn->query($sql);

                    echo '<td valign="top">';
                    echo '<ul id="projlist">';
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<li ><a id = "proj" href = "ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["city"] . '<div>' . $row["det"] . '</div><br><meter style = "width: 100%;" value = "' . $row["prog"] . '"></meter></a></li>';
                            echo '<li class = "brk"></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</td>';


                    $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det  , project.city AS city , project.progress/100 as prog , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Community' AND project.progress!=100 AND project.architect_id='" . $_SESSION["id"] . "' AND project.status='Active' ORDER BY city ASC;";
                    $result = $conn->query($sql);

                    echo '<td valign="top">';
                    echo '<ul id="projlist">';
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<li ><a id = "proj" href = "ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["city"] . '<div>' . $row["det"] . '</div><br><meter style = "width: 100%;" value = "' . $row["prog"] . '"></meter></a></li>';
                            echo '<li class = "brk"></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</td>';


                    
                    ?>
                </tr>
            </table>
			<p><h1><center>Map Locations</center></h1></p>
			<div id="map"></div>
			
		
							
	<script>
	var map;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
			zoom: 12,
			center: {lat: 6.934256, lng:  79.844078} 
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
	if(beach[0]== 'Industrial' ){

	var marker1 = new google.maps.Marker({
      position: {lat: beach[1], lng: beach[2]},
      map: map,
	   icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
      title: beach[0]
    });

    marker1.addListener('click', function() {
             window.open('/architect-master/ArchitectViewProject.php','_blank');
    });
	
	} else if(beach[0]== 'Residential' ){
		
	var marker2 = new google.maps.Marker({
      position: {lat: beach[1], lng: beach[2]},
      map: map,
	  icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
      title: beach[0]
    });
    
    marker2.addListener('click', function() {
           window.open('/architect-master/ArchitectViewProject.php','_blank');
    });
	
	}else{

	var marker3 = new google.maps.Marker({
        position: {lat: beach[1], lng: beach[2]},
        map: map,
	    icon:'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
        title: beach[0]
    });

    marker3.addListener('click', function() {
       window.open('/architect-master/ArchitectViewProject.php','_blank');
    });
	
	}	
    console.log('cat:'+beach[0]+' lat '+beach[1]+' lng'+beach[2] );
  }
}
	  
	  
    </script>
	 <?php
							require_once './db/dbConnection.php';
								$sql = "SELECT category,latitude,longitude FROM project ;";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while ($row = $result->fetch_assoc()) {
										//echo '<script type="text/javascript">addMarker('.$row["category"].')</script>';
							?>
										<script type="text/javascript">createArray( '<?php echo $row["category"].'' ?>',<?php echo $row["latitude"] ?>,<?php echo $row["longitude"] ?> )</script>
							<?php	
									}
								
								echo '<script type="text/javascript">initMap()</script> ';
								
								
								
								}
							
							$conn->close();
                            ?>
    
			
			
        </div>
							
							

    </body>
</html> 