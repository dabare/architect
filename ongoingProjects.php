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

    <title>Architect WebSite | On Going Projects</title>

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
                <li class="active">
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
                    <h2>On Going Projects</h2>
                    
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
                        <a href="ongoingProjectsReport.php?c=industrial" target="_blank">
                            <div class="col-sm-2 pull-right"><input required type="submit" class="btn btn-success btn-sm" value="Print">
                                </div>
                            </a>
                    </div>
                    <div class="ibox-content" style="height: 65vh;">
                        <div class="full-height-scroll" >
                        <?php
                            require_once './db/dbConnection.php';
                            
                            
                            $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det , project.priority AS priority , project.city AS city , project.progress as prog , project.title as title , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Industrial' AND project.progress!=100 AND project.architect_id='1' AND project.status='Active' ORDER BY priority DESC , city ASC;";
                            $result = $conn->query($sql);
                            
                            
                            
                            if ($result->num_rows > 0) {
                        
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="alert alert-success alert-dismissable">';
                                    echo '<a  href = "ArchitectViewProject.php?id=' . $row["id"] . '">
                                    <div class="pull-right"><div class="m-t-sm small">(' . $row["city"] . ')</div></div>
                                    
                                    <h5><span class="label label-warning">' . $row["priority"] . '</span> ' . $row["title"] . '</h5>
                                    
                                    
                                    
                                    <div class="m-t-sm small">' . $row["det"] . '</div>
                                    
                                    <div class="progress progress-mini">
                                    <div style="width: ' . $row["prog"] . '%;" class="progress-bar progress-bar-danger"></div>
                                    </div>
                                    
                                    </a>';
                                    echo '</div>';
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
                        <a href="ongoingProjectsReport.php?c=residential" target="_blank">
                            <div class="col-sm-2 pull-right"><input required type="submit" class="btn btn-success btn-sm" value="Print">
                                </div>
                            </a>
                    </div>
                    
                          <div class="ibox-content" style="height: 65vh;">
                        <div class="full-height-scroll" >
                        <?php
                            require_once './db/dbConnection.php';
                            
                            
                            $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det , project.priority as priority , project.city AS city , project.progress as prog , project.title as title , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Residential' AND project.progress!=100 AND project.architect_id='1' AND project.status='Active' ORDER BY priority DESC ,city ASC;";
                            $result = $conn->query($sql);
                            
                            
                            
                            if ($result->num_rows > 0) {
                        
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="alert alert-info alert-dismissable">';
                                    echo '<a  href = "ArchitectViewProject.php?id=' . $row["id"] . '">
                                    <div class="pull-right"><div class="m-t-sm small">(' . $row["city"] . ')</div></div>
                                    
                                    <h5><span class="label label-warning">' . $row["priority"] . '</span> ' . $row["title"] . '</h5>
                                    
                                    
                                    
                                    <div class="m-t-sm small">' . $row["det"] . '</div>
                                    
                                    <div class="progress progress-mini">
                                    <div style="width: ' . $row["prog"] . '%;" class="progress-bar progress-bar-danger"></div>
                                    </div>
                                    
                                    </a>';
                                    echo '</div>';
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
                        <a href="ongoingProjectsReport.php?c=community" target="_blank">
                            <div class="col-sm-2 pull-right"><input required type="submit" class="btn btn-success btn-sm" value="Print">
                                </div>
                            </a>
                    </div>
                    <div class="ibox-content" style="height: 65vh;">
                        <div class="full-height-scroll" >
                        <?php
                            require_once './db/dbConnection.php';
                            
                            
                            $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det , project.priority as priority , project.city AS city , project.progress as prog , project.title as title , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Community' AND project.progress!=100 AND project.architect_id='1' AND project.status='Active' ORDER BY priority DESC , city ASC;";
                            $result = $conn->query($sql);
                            
                            
                            
                            if ($result->num_rows > 0) {
                        
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="alert alert-warning alert-dismissable">';
                                    echo '<a  href = "ArchitectViewProject.php?id=' . $row["id"] . '">
                                    <div class="pull-right"><div class="m-t-sm small">(' . $row["city"] . ')</div></div>
                                    
                                    <h5><span class="label label-warning">' . $row["priority"] . '</span> ' . $row["title"] . '</h5>
                                    
                                    
                                    
                                    <div class="m-t-sm small">' . $row["det"] . '</div>
                                    
                                    <div class="progress progress-mini">
                                    <div style="width: ' . $row["prog"] . '%;" class="progress-bar progress-bar-danger"></div>
                                    </div>
                                    
                                    </a>';
                                    echo '</div>';
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


</body>

<?php
    $conn->close();
    ?>

</html>
