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
         <div class="wrapper wrapper-content animated fadeInRight ecommerce">
            <?php
             $search = $_GET["search"];
             ?>
            <div class="row">
                                <div class="col-lg-5">
                                    <form action="consultant.php" method="get">
                                    <div class="input-group"><input type="text" name="search" value="<?=$search;?>" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary"> Search</button> </span></div>
                                    </form>
                                    
                                </div>
                <br>
                <br>
                
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>

                                    <th data-toggle="true">Name</th>
                                    <th >Category</th>
                                    <th data-hide="all">Description</th>
                                    <th data-hide="phone">Mobile No.</th>
                                    <th data-hide="phone,tablet">Email</th>
                                    <th data-hide="phone" >City</th>
                                    <th >Status</th>
                                    <th class="text-right" data-sort-ignore="true">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    <?php
                            
                                
                            $result = $conn->query($sql);
                            
                            
                            $sql = "SELECT * FROM consultants where lname like '%$search%' or fname like '%$search%' or email like '%$search%' or mobile_no like '%$search%' or add_city like '%$search%' or category like '%$search%' or status like '%$search%' ORDER BY status ASC , lname ASC ;";
                            $result = $conn->query($sql);
                            
                            $active = "";
                            
                            if ($result->num_rows > 0) {
                        
                                while ($row = $result->fetch_assoc()) {
                                    
                                    
                                    if($row["status"]=="active"){
                                        $active = '<span class="label label-primary">Active</span>';
                                    }else{
                                        $active = '<span class="label label-warning">Inactive</span>';
                                    }
                                    
                                    echo'
                                    
                                    
                                    <tr>
                                    <td>
                                       '.$row["lname"].' '.$row["fname"].'
                                    </td>
                                    <td>
                                        '.$row["category"].'
                                    </td>
                                    <td>
                                        '.$row["description"].'
                                    </td>
                                    <td>
                                        '.$row["mobile_no"].'
                                    </td>
                                    <td>
                                        '.$row["email"].'
                                    </td>
                                    <td>
                                        '.$row["add_city"].'
                                    </td>
                                    <td>
                                        '.$active.'
                                    </td>
                                    <td class="text-right">
                                        <form action="ArchitectViewConsultant.php" method="get">
                                            <input name="id" type="hidden" value="'.$row["id"].'">
                                            <input class="btn-white btn btn-xs" type="submit" value="View">
                                        </form> 
                                        
                                    </td>
                                </tr>
                                    
                                    
                                    
                                    
                                    
                                    
                                    ';
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                }
                            }
                            
                            
                        ?> 
                                    
                                    
                                    
                               
                                
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

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

</body>
<?php
    $conn->close();
    ?>

</html>
