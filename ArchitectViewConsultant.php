<!DOCTYPE html>
<html>

<?php
session_start();
require_once './db/dbConnection.php';
$_SESSION["id"] = 1;
    
    
    
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM consultants WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $fname=$row["fname"];
	$mname=$row["mname"];
	$lname=$row["lname"];
	$age=$row["age"];
	$add_no=$row["add_no"];
	$add_street=$row["add_street"];
	$add_city=$row["add_city"];
	$email=$row["email"];
	$mobile_no=$row["mobile_no"];
	$land_no=$row["land_no"];
	$nic=$row["nic"];
	$date=$row["created"];
        $payment = $row["payment"];
        $status = $row["status"];
        $location = $row["location"];
    }
}
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Architect WebSite | Consultants</title>

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
                <li class="active">
                    <a href="consultant.php"><i class="fa fa-male"></i> <span class="nav-label">Consultants</span></a>
                </li>
                <li>
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
                    <h2>Consultants</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
         <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            
                            <h2>Consultant</h2>
                            <p>
                                Consultant details
                            </p>
                            <div class="ibox-content">
                            <form method="get" class="form-horizontal">
                                <div class="row">
                                <div class="col-sm-9">
                                <div class="form-group"><label class="col-sm-3 control-label">First Name:</label>

                                    <div class="col-sm-7"><input type="text" class="form-control" disabled value="<?php echo $fname;?>"></div>
                                </div>
                                <!-- <div class="hr-line-dashed"></div> -->
                                <div class="form-group"><label class="col-sm-3 control-label">Middle Name:</label>

                                    <div class="col-sm-7"><input type="text" class="form-control" disabled value="<?php echo $mname;?>"></div>
                                </div>
                                <!-- <div class="hr-line-dashed"></div> -->
                                <div class="form-group"><label class="col-sm-3 control-label">Last Name:</label>

                                    <div class="col-sm-7"><input type="text" class="form-control" disabled value="<?php echo $lname;?>"></div>
                                </div>
                                </div>
                                <div class="col-sm-3"><img src="uploads/consultant/<?php echo $id;?>.jpeg" class="circle" style="height:106px;width:106px" alt="Profile">
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Age:</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" disabled value="<?php echo $age;?>"></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">NIC:</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" disabled value="<?php echo $nic;?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Address No:</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" disabled value="<?php echo $add_no;?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Street:</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" disabled value="<?php echo $add_street;?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">City:</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" disabled value="<?php echo $add_city;?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Email:</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" disabled value="<?php echo $email;?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Mobile Number:</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" disabled  value="<?php echo $mobile_no;?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Land Number:</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" disabled value="<?php echo $land_no;?>"></div>
                                </div>
                                </form>
                                <form action="Projects/SaveConsultants.php" method="post"  class="form-horizontal">
                                <input name="consulid" value="<?php echo $id;?>" type="hidden">
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Payment:</label>

                                            <div class="col-sm-10"><input required name="payment" type="number" class="form-control"   value="<?php echo $payment;?>"></div>
                                        </div>
                                        <div class="hr-line-dashed"></div>

                                    <?php 
                                    
                                       if($status=="active"){
                                           $status = "checked";
                                       }else{
                                           $status = "";
                                       }
                                    ?>
                                        <div class="switch">
                                            <div class="onoffswitch">
                                                <input name="status"  type="checkbox" <?php echo $status;?> class="onoffswitch-checkbox" id="status">
                                                <label  class="onoffswitch-label" for="status">
                                                    <span class="onoffswitch-inner" ></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <input class="btn btn-primary" type="submit" value="Save">
                                    </form>
                                <br>
                                     <form onsubmit="return confirm('Do you really want to delete the consultant?');" action="Projects/DeleteConsultants.php" method="post"  class="form-horizontal">
                                         <input name="consulid" value="<?php echo $id;?>" type="hidden">
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                
                            </div>
                            <div id="map" style="width:100%;height:500px"></div>
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
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(<?=$location?>); 
  var mapOptions = {center: myCenter, zoom: 10};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoS2uHtXLrjmwYWnUmWnFRUSV2BIrsW9g&callback=myMap"></script>
</body>
<?php
    $conn->close();
    ?>

</html>
