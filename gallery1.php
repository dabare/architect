<!DOCTYPE html>
<html>

<?php
session_start();
require_once './db/dbConnection.php';
$_SESSION["id"] = 1;
    
    
    $id = $_GET['id'];


$sql = "SELECT * FROM g_project WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $category = $row["category"];
        $description = $row["description"];
        $title = $row["title"];
        $finish = $row["finish"];
    }
}
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
                <li class="active">
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
                    <h2>Edit Gallery Item</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
              
                
                
                    <div>
                        <div class="col-lg-5">
                            Category of the Project:
                            <select  id="procat" name="category" >
                                <option<?php
                                if ($category == "Industrial") {
                                    echo ' selected';
                                }
                                ?> value="Industrial">Industrial</option>
                                <option<?php
                                if ($category == "Residential") {
                                    echo ' selected';
                                }
                                ?> value="Residential">Residential</option>
                                <option<?php
                                if ($category == "Community") {
                                    echo ' selected';
                                }
                                ?> value="Community">Community</option>
                            </select>
                            <br><br>
                        </div>
                        
                        <div class="col-lg-5">
                            Title:
                            <textarea name="title" id="protitle" rows="1" cols="40"><?php echo $title; ?></textarea>
                        </div>
                        <div class="col-lg-2">
                        <button type="button" onclick="saveGalleryProj()">Save</button>
                        </div>
                    </div><br><br> 
                
                
                
                
                
                
                
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h4>Images</h4>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                                <?php
                                $sql = "SELECT * FROM g_image WHERE g_project_id=" . $id . ";";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row

                                    while ($row = $result->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '
                                                <td>' . $row["description"] . '</td>
                                        <td><a><img src="./uploads/' . $row["url"] . '"  width="200" height="100"></a></td>
                                           <td><button type="button" onclick="deletePhoto(' . $row["id"] . ')">Delete</button></td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                                
                                
                            </tbody>
                        </table>

                    </div>
                </div>
                

                                <script>

                                    function deletePhoto(imid) {
                                        if (confirm("Confirm delete photo ") == true) {


                                            var form = document.createElement("form");
                                            form.setAttribute("method", "post");
                                            form.setAttribute("action", "Projects/DeleteGalleryPhoto.php");




                                            var pid = document.createElement("input");
                                            pid.setAttribute("type", "hidden");
                                            pid.setAttribute("name", "prid");
                                            pid.setAttribute("value", <?php echo $id ?>);


                                            form.appendChild(pid);

                                            var iid = document.createElement("input");
                                            iid.setAttribute("type", "hidden");
                                            iid.setAttribute("name", "imid");
                                            iid.setAttribute("value", imid);


                                            form.appendChild(iid);




                                            document.body.appendChild(form);
                                            form.submit();
                                        } else {

                                        }

                                    }

                                </script>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <legend>Insert Image:</legend>
                            <br>
                        <form action="./Projects/AddGalleryPhoto.php" method="post" enctype="multipart/form-data">
                            <div style="display: inline-block">
                                
                                <input required="true" id="files" type="file" name="pic" accept="image/*" onchange="readURL(this)">  
                            </div>.
                            <input type="text" hidden="true" name="id" value="<?php echo $id; ?>">
                            <div style="display: inline-block">
                                Description:<br>
                                <textarea required="true" name="desc" rows="4" cols="50" style="position: left"></textarea> 
                            </div>
                            <div class="pull-right">
                                <br>
                                <input type="submit" style="width: 100px; height: 25px;"value="Add">
                            </div>.
                        </form>
                            </div>
                    </div>
                
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <legend>Entire Description</legend>
                            <br>
                            Description:<br>
                            <textarea id="prodisc" rows="5" name="desc" cols="50"><?php echo $description; ?></textarea>
                        
                        <div class="pull-right">
                        <button type="button"  style="width: 100px;height: 30px;" onclick="saveGalleryProj()">Save</button>
                        </div>
                        </div>
                </div>
                
                        <div>
                        
                        
                        <script>
                            function saveGalleryProj() {


                                var form = document.createElement("form");
                                form.setAttribute("method", "post");
                                form.setAttribute("hidden", "true");
                                form.setAttribute("action", "Projects/SaveGalleryTitle.php");




                                var pid = document.createElement("input");
                                pid.setAttribute("type", "hidden");
                                pid.setAttribute("name", "prid");
                                pid.setAttribute("value", <?php echo $id ?>);


                                form.appendChild(pid);



                                form.appendChild(document.getElementById("procat"));
                                form.appendChild(document.getElementById("prodisc"));
                                form.appendChild(document.getElementById("protitle"));



                                document.body.appendChild(form);
                                form.submit();
                            }

                            function deleteGalleryProj() {
                                if (confirm("Confirm delete Project ") == true) {


                                    var form = document.createElement("form");
                                    form.setAttribute("method", "post");
                                    form.setAttribute("action", "Projects/DeleteGalleryProject.php");




                                    var pid = document.createElement("input");
                                    pid.setAttribute("type", "hidden");
                                    pid.setAttribute("name", "prid");
                                    pid.setAttribute("value", <?php echo $id ?>);


                                    form.appendChild(pid);




                                    document.body.appendChild(form);
                                    form.submit();
                                } else {

                                }

                            }
                        </script>
                    </div><br>
            
                
                
                 <center>
                <button type="button"  class="btn btn-w-m btn-danger" style="width: 500px;height: 30px;" onclick="deleteGalleryProj()">Delete This Project</button>
            </center>
                
                
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
