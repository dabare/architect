<!DOCTYPE html>
<html>

<?php
session_start();
require_once './db/dbConnection.php';
    $id = $_SESSION["id"];
     $sql = "SELECT * FROM customer WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
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
	
    
    $uname = $row["uname"];
    $location = $row["location"];
        $password = $row["passwd"];
    }
}
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Architect WebSite | Customer Notification</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

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
                            <img alt="image" style="width:55px;height:55px;" class="img-circle" src="uploads/customer/<?php echo $_SESSION["id"];?>.jpeg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $lname;?><?php echo '_';?><?php echo $fname;?></strong>
                             </span>  </span> </a>
                        
                    </div>
                </li>
                <?php
                $sql = "select COUNT(post.id) as count from post left join project on project.id = post.project_id where post.seen = 0 and project.customer_id = ".$_SESSION["id"]." and post.byy = \"Architect\";";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $count = $row["count"] ;
                    }
                }
                ?>
                <li class="active">
                    <a href="CustomerNotification.php"><i class="fa fa-globe"></i> <span class="nav-label">Notifications</span><span class="label label-warning pull-right"><?php echo $count;?></span></a>
                </li>
                <li>
                    <a href="CustomerProject.php"><i class="fa fa-pie-chart"></i> <span class="nav-label">My Projects</span></a>
                </li>
                <li>
                    <a href="CustomerConsultant.php"><i class="fa fa-male"></i> <span class="nav-label">Consultants</span></a>
                </li>
                <li>
                    <a href="CustomerEditProfile.php"><i class="fa fa-edit"></i> <span class="nav-label">Edit Profile</span></a>
                    
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
                    <h2>Notifications</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
                <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Industrial</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                        <div class="ibox-content" style="height: 65vh;">
                        <div class="full-height-scroll" >
                         <?php
                            $sql = 'select project.id , project.title , project.priority as priority, project.city , project.category from post left join project on project.id = post.project_id where post.seen = 0 and project.customer_id = "'.$_SESSION["id"].'" and post.byy = "Architect" and project.category="Industrial" order by progress ASC ;';
                        
                        
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    
                                    
                                    $sql = "SELECT * FROM architect WHERE id=1;";
                                    $resultt = $conn->query($sql);

                                    if ($resultt->num_rows > 0) {
                                        while ($roww = $resultt->fetch_assoc()) {
                                            $Name = $roww["lname"] . "_" . $roww["fname"];
                                        }
                                    }
                                    
                                    
                                    
                                    echo '
                                    <div class="alert alert-success alert-dismissable">
                                     <a class="alert-link" href="CustomerViewProject.php?id='.$row["id"].'">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        '.$Name.' Posted in '.$row["title"].' at '.$row["city"].'.</a>
                                    </div>
                                    ';
                                }
                            }
                            ?>
                            </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Residential</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="height: 65vh;">
                        <div class="full-height-scroll" >
                       <?php
                            $sql = 'select project.id , project.title , project.priority as priority, project.city , project.category from post left join project on project.id = post.project_id where post.seen = 0 and project.customer_id = "'.$_SESSION["id"].'" and post.byy = "Architect" and project.category="Residential" order by progress ASC ;';
                        
                        
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    
                                    
                                    $sql = "SELECT * FROM architect WHERE id=1;";
                                    $resultt = $conn->query($sql);

                                    if ($resultt->num_rows > 0) {
                                        while ($roww = $resultt->fetch_assoc()) {
                                            $Name = $roww["lname"] . "_" . $roww["fname"];
                                        }
                                    }
                                    
                                    
                                    
                                    echo '
                                    <div class="alert alert-info alert-dismissable">
                                    <a class="alert-link" href="CustomerViewProject.php?id='.$row["id"].'">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        '.$Name.' Posted in '.$row["title"].' at '.$row["city"].'.</a>
                                    </div>
                                    ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Community</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="height: 65vh;">
                        <div class="full-height-scroll" >
                        <?php
                            $sql = 'select project.id , project.title , project.priority as priority, project.city , project.category from post left join project on project.id = post.project_id where post.seen = 0 and project.customer_id = "'.$_SESSION["id"].'" and post.byy = "Architect" and project.category="Community" order by progress ASC ;';
                        
                        
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    
                                    
                                    $sql = "SELECT * FROM architect WHERE id=1;";
                                    $resultt = $conn->query($sql);

                                    if ($resultt->num_rows > 0) {
                                        while ($roww = $resultt->fetch_assoc()) {
                                            $Name = $roww["lname"] . "_" . $roww["fname"];
                                        }
                                    }
                                    
                                    
                                    echo '
                                    <div class="alert alert-warning alert-dismissable">
                                    <a class="alert-link" href="CustomerViewProject.php?id='.$row["id"].'">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        '.$Name.' Posted in '.$row["title"].' at '.$row["city"].'.</a>
                                    </div>
                                    ';
                                }
                            }
                            ?>
                        
                    </div>
                    
                    
                    </div>
                    
                    
                    
                </div>
            </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
            </div>
            <div>
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
<?php
    $conn->close();
    ?>

</html>
