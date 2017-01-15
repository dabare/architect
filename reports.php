<!DOCTYPE html>
<html>

<?php
session_start();
require_once './db/dbConnection.php';
$_SESSION["id"] = 1;

?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Architect WebSite | Statistics</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    
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
                            <img alt="image" style="width:55px;height:55px;" class="img-circle" src="uploads/architect/<?php echo $_SESSION["id"];?>.jpeg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Priyantha Premathilake</strong>
                             </span>  </span> </a>
                        
                    </div>
                </li>
                <?php
                $sql = "select COUNT(post.id) as count from post left join project on project.id = post.project_id where post.seen = 0 and project.architect_id = ".$_SESSION["id"]." and post.byy = \"Client\";";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $count = $row["count"] ;
                    }
                }
                ?>
                
                <li>
                    <a href="notification.php"><i class="fa fa-globe"></i> <span class="nav-label">Notifications</span><span class="label label-warning pull-right"><?php echo $count;?></span></a>
                    
                </li>
                <li>
                    <a href="ongoingProjects.php"><i class="fa fa-flask"></i> <span class="nav-label">On Going Projects</span></a>
                </li>
                <li>
                    <a href="gallery.php"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span></a>
                    
                </li>
                <li>
                    <a href="awards.php"><i class="fa fa-trophy"></i> <span class="nav-label">Manage Awards Received</span></a>
                    
                </li>
                <li>
                    <a href="completedProjects.php"><i class="fa fa-diamond"></i> <span class="nav-label">Completed Projects</span>  </a>
                </li>
                <li>
                    <a href="customer.php"><i class="fa fa-male"></i> <span class="nav-label">Customers</span></a>
                </li>
                <li>
                    <a href="consultant.php"><i class="fa fa-male"></i> <span class="nav-label">Consultants</span></a>
                </li>
                <li  class="active">
                    <a href="reports.php"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistics</span></a>
                    
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="ArchitectEditProfile.php">Edit Profile</a></li>
                        <li><a href="settings.php">General Settings</a></li>
                    </ul>
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
                    <h2>Statistics</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
         <div class="wrapper wrapper-content animated fadeInRight">
            <?php
        
             $sumcount = 0;
             $comcount = 0;
             $oncount = 0;
             
            $sql = "Select count(id) as count from project where status='active';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                     $sumcount = $row['count'];
                }
            }
             
             $sql = "Select count(id) as count from project where progress = 100 and status='active';";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                     $comcount = $row['count'];
                }
            }
             
             $sql = "Select count(id) as count from project where progress != 100 and status='active';";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                     $oncount = $row['count'];
                }
            }
        
        
        ?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="badge badge-primary"><?php echo $sumcount;?></span> Overall Projects Summary</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div class="flot-chart">
                                <div class="flot-chart-pie-content" id="Overall-Projects-Summary"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="badge badge-info"><?php echo $comcount;?></span> Completed Projects</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div class="flot-chart">
                                <div class="flot-chart-pie-content" id="Completed-Projects-Summary"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="badge badge-info"><?php echo $oncount;?></span> Ongoing Projects</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div class="flot-chart">
                                <div class="flot-chart-pie-content" id="Ongoing-Projects-Summary"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                
                $from = 2000;
                $to = 2019;
                
                    if(isset($_GET["from"])){
                        $from = $_GET["from"];
                    }
                    if(isset($_GET["to"])){
                        $to = $_GET["to"];
                    }
                
                ?>
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <form target="_blank" action="incomeReport.php" method="get">
                                <div class="col-md-1"><strong>Year:</strong></div> 
                            <div class="col-sm-2"><input name="year" required type="number" class="form-control" value="<?php echo date("Y");?>">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-1"></div> 
                                <div class="col-sm-2"><input  name="month" required type="hidden" class="form-control" value="0">
                                </div> 
                                <div class="col-md-1"></div>
                            <div class="col-sm-2"><input required type="submit" class="btn btn-success btn-sm" value="Show Income">
                                </div>
                            </form>
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <form  target="_blank" action="incomeReport.php" method="get">
                                <div class="col-md-1"><strong>Year:</strong></div> 
                            <div class="col-sm-2"><input name="year" required type="number" class="form-control" value="<?php echo date("Y");?>">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-1"><strong>Month:</strong></div> 
                            <div class="col-sm-2"><input min="1" max="12" name="month" required type="number" class="form-control" value="<?php echo date("m");?>">
                                </div> 
                                <div class="col-md-1"></div>
                            <div class="col-sm-2"><input required type="submit" class="btn btn-success btn-sm" value="Show Income">
                                </div>
                            </form>
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <form  action="reports.php" method="get">
                                <div class="col-md-1"><strong>From:</strong></div> 
                            <div class="col-sm-2"><input name="from" required type="number" class="form-control" value="<?php echo $from;?>">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-1"><strong>To:</strong></div> 
                            <div class="col-sm-2"><input name="to" required type="number" class="form-control" value="<?php echo $to;?>">
                                </div> 
                                <div class="col-md-1"></div>
                            <div class="col-sm-2"><input required type="submit" class="btn btn-info btn-sm" value="Show Summary">
                                </div>
                            </form>
                            <br><br>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Income Summary Year-wise</h5> 
                            <div class="pull-right">From:<?php echo $from;?> To:<?php echo $to;?></div>
                        </div>
                        <div class="ibox-content">
                            <div id="morris-one-line-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Income Summary Year-wise , Category-wise</h5>
                            <div class="pull-right">From:<?php echo $from;?> To:<?php echo $to;?></div>
                        </div>
                        <div class="ibox-content" style="position: relative">
                            <div id="morris-area-chart"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Project Location</h5>
                            <a href="printProjectMap.php" target="_blank">
                            <div class="col-sm-2 pull-right"><input required type="submit" class="btn btn-success btn-sm" value="Print">
                                </div>
                            </a>
                        </div>
                        
                        <div class="ibox-content" style="position: relative">
                            <div class="google-map" id="map" style="width:100%;height:1000px"></div>
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

    
     <!-- Morris -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
    
    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    
    <script>
    $(function() {

    var data = [ 
        
    {
        <?php
        
            $sql = "Select count(id) as count from project where category ='Industrial' and status='active';";
            $result = $conn->query($sql);

            $active = "";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 'label: "Industrial '.$row["count"].'",';
                    echo 'data: '.$row["count"].',';
                    echo 'color: "#d3d3d3",';
                }
            }
        
        
        ?>
    }, {
        <?php
        
            $sql = "Select count(id) as count from project where category ='Residential' and status='active';";
            $result = $conn->query($sql);

            $active = "";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 'label: "Residential '.$row["count"].'",';
                    echo 'data: '.$row["count"].',';
                    echo 'color: "#79d2c0",';
                }
            }
        
        
        ?>
    }, {
        <?php
        
            $sql = "Select count(id) as count from project where category ='Community' and status='active';";
            $result = $conn->query($sql);

            $active = "";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 'label: "Community '.$row["count"].'",';
                    echo 'data: '.$row["count"].',';
                    echo 'color: "#1ab394",';
                }
            }
        
        
        ?>
    }
    
    
    ];

    var plotObj = $.plot($("#Overall-Projects-Summary"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });

});

    $(function() {

    var data = [ 
        
    {
        <?php
        
            $sql = "Select count(id) as count from project where category ='Industrial' and progress = 100 and status='active';";
            $result = $conn->query($sql);

            $active = "";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 'label: "Industrial '.$row["count"].'",';
                    echo 'data: '.$row["count"].',';
                    echo 'color: "#d3d3d3",';
                }
            }
        
        
        ?>
    }, {
        <?php
        
            $sql = "Select count(id) as count from project where category ='Residential' and progress = 100 and status='active';";
            $result = $conn->query($sql);

            $active = "";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 'label: "Residential '.$row["count"].'",';
                    echo 'data: '.$row["count"].',';
                    echo 'color: "#79d2c0",';
                }
            }
        
        
        ?>
    }, {
        <?php
        
            $sql = "Select count(id) as count from project where category ='Community' and progress = 100 and status='active';";
            $result = $conn->query($sql);

            $active = "";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 'label: "Community '.$row["count"].'",';
                    echo 'data: '.$row["count"].',';
                    echo 'color: "#1ab394",';
                }
            }
        
        
        ?>
    }
    
    
    ];

    var plotObj = $.plot($("#Completed-Projects-Summary"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });

});
    
    $(function() {

    var data = [ 
        
    {
        <?php
        
            $sql = "Select count(id) as count from project where category ='Industrial' and progress != 100 and status='active';";
            $result = $conn->query($sql);

            $active = "";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 'label: "Industrial '.$row["count"].'",';
                    echo 'data: '.$row["count"].',';
                    echo 'color: "#d3d3d3",';
                }
            }
        
        
        ?>
    }, {
        <?php
        
            $sql = "Select count(id) as count from project where category ='Residential' and progress != 100 and status='active';";
            $result = $conn->query($sql);

            $active = "";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 'label: "Residential '.$row["count"].'",';
                    echo 'data: '.$row["count"].',';
                    echo 'color: "#79d2c0",';
                }
            }
        
        
        ?>
    }, {
        <?php
        
            $sql = "Select count(id) as count from project where category ='Community' and progress != 100 and status='active';";
            $result = $conn->query($sql);

            $active = "";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 'label: "Community '.$row["count"].'",';
                    echo 'data: '.$row["count"].',';
                    echo 'color: "#1ab394",';
                }
            }
        
        
        ?>
    }
    
    
    ];

    var plotObj = $.plot($("#Ongoing-Projects-Summary"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });

});
    
     $(function() {

    Morris.Line({
        element: 'morris-one-line-chart',
            data: [
                                                <?php
                $id = $_SESSION["id"] ;
                
$sql = "select EXTRACT(YEAR FROM pdate) AS year from project where  status='active' and architect_id = '$id' AND EXTRACT(YEAR FROM pdate)>='$from' AND EXTRACT(YEAR FROM pdate)<='$to' group by EXTRACT(YEAR FROM pdate) ORDER BY pdate;";
$result = $conn->query($sql);

while ($row = $result->fetch_object()) {
    $year = $row->year;

    $sql2 = "select sum(invoice.amount) as tot from project right join invoice on project.id = invoice.project_id where project.status = 'active' and EXTRACT(YEAR from project.pdate) = '$year' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->tot;
        if (!$tot) {
            $tot = 0;
        }
        echo " { year: '$year', value: $tot },";
    }

}      
                ?>
            ],
        xkey: 'year',
        ykeys: ['value'],
        resize: true,
        lineWidth:4,
        labels: ['Value'],
        lineColors: ['#1ab394'],
        pointSize:5,
    });

         Morris.Area({
        element: 'morris-area-chart',
        data: [
            
            <?php
                $id = $_SESSION["id"] ;
                
$sql = "select EXTRACT(YEAR FROM pdate) AS year from project where status = 'active' and architect_id = '$id' AND EXTRACT(YEAR FROM pdate)>='$from' AND EXTRACT(YEAR FROM pdate)<='$to' group by EXTRACT(YEAR FROM pdate) ORDER BY pdate;";
$result = $conn->query($sql);

while ($row = $result->fetch_object()) {
    $year = $row->year;
    $residential = 0;
    $community = 0;
    $industrial = 0;

    $sql2 = "select sum(invoice.amount) as tot from project right join invoice on project.id = invoice.project_id where project.status='active' and EXTRACT(YEAR from project.pdate) = '$year' AND project.category = 'Residential' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->tot;
        if (!$tot) {
            $tot = 0;
        }
        $residential = $tot;
    }
    
    $sql2 = "select sum(invoice.amount) as tot from project right join invoice on project.id = invoice.project_id where project.status='active' and EXTRACT(YEAR from project.pdate) = '$year' AND project.category = 'Community' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->tot;
        if (!$tot) {
            $tot = 0;
        }
        $community = $tot;
    }
    
     $sql2 = "select sum(invoice.amount) as tot from project right join invoice on project.id = invoice.project_id where project.status='active' and EXTRACT(YEAR from project.pdate) = '$year' AND project.category = 'Industrial' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->tot;
        if (!$tot) {
            $tot = 0;
        }
        $industrial = $tot;
    }
    echo "{ period: '$year', Industrial: $industrial, Community: $community, Residential: $residential },";
} 
                ?>
            
        
        ],
             
        xkey: 'period',
        ykeys: ['Industrial', 'Community', 'Residential'],
        labels: ['Industrial', 'Community', 'Residential'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        lineColors: ['#87d6c6', '#54cdb4','#1ab394'],
        lineWidth:2,
        pointSize:1,
    });

         
});
   
        
    </script>

    

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
    
</body>
<?php
    $conn->close();
    ?>

</html>
