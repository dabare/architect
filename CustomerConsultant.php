<!DOCTYPE html>
<html>

<?php
session_start();
require_once './db/dbConnection.php';
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM customer WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
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

    <title>Architect WebSite | Customer</title>

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
                <li>
                    <a href="CustomerNotification.php"><i class="fa fa-globe"></i> <span class="nav-label">Notifications</span><span class="label label-warning pull-right"><?php echo $count;?></span></a>
                </li>
               <li>
                    <a href="CustomerEditProfile.php"><i class="fa fa-edit"></i> <span class="nav-label">Edit Profile</span></a>
                    
                </li>
                
                <li class="active">
                    <a href="CustomerConsultant.php"><i class="fa fa-male"></i> <span class="nav-label">Consultants</span></a>
                </li>
                <li>
                    <a href="CustomerProject.php"><i class="fa fa-pie-chart"></i> <span class="nav-label">My Projects</span></a>
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
                    <h2>Select Consultants</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
        <div class="wrapper wrapper-content animated fadeIn">
            <?php
             $search = $_GET["search"];
             ?>
             <div class="row">
                 <div class="col-lg-5">
                     <form action="CustomerConsultant.php" method="get">
                                    <div class="input-group"><input type="text" name="search" value="<?=$search;?>" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary"> Search</button> </span></div>
                                    </form>
                                    
                                </div>
                <br>
                <br>
                <div class="col-sm-8">
                    <div class="ibox">
                        <div class="ibox-content">
                            
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <?php
                            
                            
                            $sql = "SELECT COUNT(id) as count FROM (select *  from consultants WHERE status='active') as t1 where lname like '%$search%' or fname like '%$search%' or email like '%$search%' or mobile_no like '%$search%' or add_city like '%$search%' or category like '%$search%' ORDER BY status ASC , lname ASC ;;";
                            $result = $conn->query($sql);
                            
                            
                            
                            if ($result->num_rows > 0) {
                        
                                while ($row = $result->fetch_assoc()) {
                                    $count = $row["count"];
                                }
                            }
                            
                            
                        ?> 
                                <span class="pull-right small text-muted"><?php echo $count;?> Consultants</span>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Consultants</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                
                                                    
                                                    
                                                    <?php
                            
                            
                            $sql = "SELECT * FROM  (select *  from consultants WHERE status='active') as t1 where lname like '%$search%' or fname like '%$search%' or email like '%$search%' or mobile_no like '%$search%' or add_city like '%$search%' or category like '%$search%'  ORDER BY status ASC , lname ASC ;;";
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
                                                    <td class="client-avatar"><img alt="image" src="uploads/consultant/'.$row["id"].'.jpeg"> </td>
                                                    <td><a data-toggle="tab" href="#contact-'.$row["id"].'" class="client-link">'.$row["lname"].' '.$row["fname"].'</a></td>
                                                    <td>'.$row["category"].'</td>
                                                    <td>'.$row["add_city"].'</td>
                                                    <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                                    <td>'.$row["mobile_no"].'</td>
                                                    
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
                            
                            $active = "active";
                            $sql = "SELECT * FROM  (select *  from consultants WHERE status='active') as t1 where lname like '%$search%' or fname like '%$search%' or email like '%$search%' or mobile_no like '%$search%' or add_city like '%$search%' or category like '%$search%'  ORDER BY status ASC , lname ASC ;;";
                            
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                        
                                while ($row = $result->fetch_assoc()) {
                                    
                                    
                               echo '
                               
                               
                               <div id="contact-'.$row["id"].'" class="tab-pane '.$active.'">
                                    <div class="row m-b-lg">
                                        
                                        <br>
                                        <div class="text-center">
                                            <h2>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="img-circle" src="uploads/consultant/'.$row["id"].'.jpeg"
                                                     style="width: 62px; Height: 62px;">
                                            </div>
                                            
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </div>
                                    <div class="client-detail">
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
                                                <span class="pull-right"> '.$row["category"].' </span>
                                                Category:
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
                                            <li class="list-group-item fist-item">
                                                Description:
                                                <span class="pull-right"> '.$row["description"].' </span>
                                                
                                            </li>
                                        </ul>';


                         
                                    
                                  
                                       
                                   echo' </div>
                                        
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
