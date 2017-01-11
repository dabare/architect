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

    <title>Architect WebSite | Gallery</title>

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
                <li class="active">
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
                    <h2>Customers</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
        <div class="wrapper wrapper-content animated fadeIn">
             <div class="row">
                <div class="col-sm-8">
                    <div class="ibox">
                        <div class="ibox-content">
                            
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <?php
                            
                            $search = $_GET["search"];
                                
                                
                            $sql = "SELECT COUNT(id) as count FROM (select * from customer) where lname like '%$search%' or fname like '%$search%' or email like '%$search%' or mobile_no like '%$search%' or add_city like '%$search%';";
                            $result = $conn->query($sql);
                            
                            
                            
                            if ($result->num_rows > 0) {
                        
                                while ($row = $result->fetch_assoc()) {
                                    $count = $row["count"];
                                }
                            }
                            
                            
                        ?> 
                                <span class="pull-right small text-muted"><?php echo $count;?> Customers</span>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Customers</a></li>
                                <div class="col-lg-5">
                                    <form action="customer.php" method="get">
                                    <div class="input-group"><input type="text" name="search" value="<?=$search;?>" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary"> Search</button> </span></div>
                                    </form>
                                    
                                </div>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active"  style="height: 60vh;">
                                    
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" >
                                                <tbody>
                                                
                                                    
                                                    
                                                    <?php
                                                    
                            $sql = "SELECT * FROM customer where lname like '%$search%' or fname like '%$search%' or email like '%$search%' or mobile_no like '%$search%' or add_city like '%$search%' ORDER BY lname;";
                            $result = $conn->query($sql);
                            
                            
                            
                            if ($result->num_rows > 0) {
                        
                                while ($row = $result->fetch_assoc()) {
                                    
                                    $sql = "SELECT count(id) as cc FROM project where customer_id = ".$row["id"].";";
                                    $resultt = $conn->query($sql);
                            
                            
                            $cc  = 0;
                                    if ($resultt->num_rows > 0) {
                        
                                        while ($roww = $resultt->fetch_assoc()) {
                                            $cc = $roww["cc"];
                                        }
                                    }
                                    echo'
                                            
                                                <tr>
                                                    <td class="client-avatar"><img alt="image" src="uploads/customer/'.$row["id"].'.jpeg"> </td>
                                                    <td><a data-toggle="tab" href="#contact-'.$row["id"].'" class="client-link">'.$row["lname"].' '.$row["fname"].'</a></td>
                                                    <td>'.$row["add_city"].'</td>
                                                    <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                                    <td>'.$row["mobile_no"].'</td>
                                                    <td class="client-projects">'.$cc.' projects</td>
                                                </tr>
                                    
                                    ';
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
                            $sql = "SELECT * FROM customer where lname like '%$search%' or fname like '%$search%' or email like '%$search%' or mobile_no like '%$search%' or add_city like '%$search%' ORDER BY lname;";
                                
                            $active = "active";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                        
                                while ($row = $result->fetch_assoc()) {
                                    
                                    
                               echo '
                               
                               
                               <div id="contact-'.$row["id"].'" class="tab-pane '.$active.'">
                                    <div class="row m-b-lg">
                                        <form  method="GET" action="AddNewProject.php">
                                            <input type="hidden"  name="id" value="'.$row["id"].'">
                                            <button type="submit" class="btn btn-primary btn-sm"> Start New Project For:
                                        </a>
                                            </button>
                                        </form>
                                        <br>
                                        <div class="text-center">
                                            <h2>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="img-circle" src="uploads/customer/'.$row["id"].'.jpeg"
                                                     style="width: 62px; Height: 62px;">
                                            </div>
                                            
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </div>
                                    <div class="client-detail"  style="height: 40vh;">
                                    <div class="full-height-scroll">

                                        <strong>Info</strong>

                                        <ul class="list-group clear-list">
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right"> '.$row["id"].' </span>
                                                ID:
                                            </li>
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right"> '.$row["age"].' </span>
                                                AGE:
                                            </li>
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right">'.$row["nic"].'</span>
                                                NIC:
                                            </li>
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right"> '.$row["add_no"].', '.$row["add_street"].', '.$row["add_city"].'. </span>
                                                Add:
                                            </li>
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right"> '.$row["email"].' </span>
                                                E Mail:
                                            </li>
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right"> '.$row["mobile_no"].' </span>
                                                Mobile NO:
                                            </li>
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right"> '.$row["land_no"].' </span>
                                                Land NO:
                                            </li>
                                            <li class="list-group-item fist-item">
                                                <span class="pull-right"> '.$row["created"].' </span>
                                                Created:
                                            </li>
                                        </ul>
                                       

                                        <strong>Projects</strong> ';


                         $sql = "select * from project where customer_id =".$row["id"]." and status='Active' ORDER BY priority DESC , progress ASC;";
                            $resultt = $conn->query($sql);
                            
                            $colour = "";
                            
                            if ($resultt->num_rows > 0) {
                        
                                while ($roww = $resultt->fetch_assoc()) {
                                    
                                    if($roww["category"]=="Industrial"){
                                        $colour = "success";
                                    }else if($roww["category"]=="Residential"){
                                        $colour = "info";
                                    }else{
                                        $colour = "warning";
                                    }
                                    echo '<div class="alert alert-'.$colour.' alert-dismissable">';
                                    echo '<a  href = "ArchitectViewProject.php?id=' . $roww["id"] . '">
                                    <div class="pull-right"><div class="m-t-sm small">(' . $roww["city"] . ')</div></div>
                                    
                                    <h5>' . $roww["title"] . '</h5>';
                                    
                                    
                                      if($roww["progress"] !=100){  
                                        echo '
                                        <div class="progress progress-mini">
                                        <div style="width: ' . $roww["progress"] . '%;" class="progress-bar progress-bar-danger"></div>
                                        </div>';
                                      }else{
                                          echo '<div><strong>Completed</strong></div>';
                                          
                                      }
                                    
                                    echo '</a></div>';
                                }
                            }
                                    
                                  
                                       
                                   echo' 
                               
                                   <form onsubmit="return confirm(\'Do you really want to delete the Customer?\');" action="Projects/DeleteCustomer.php" method="post"  class="form-horizontal">
                                         <input name="id" value="'.$row["id"].'" type="hidden">
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                   </div>
                                           
                                    </div>
                                </div>
                               ';
                                  if($active == "active"){
                                        $active = "";
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


</body>
<?php
    $conn->close();
    ?>

</html>
