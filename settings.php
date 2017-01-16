<!DOCTYPE html>
<html>

    <?php
    session_start();
    require_once './db/dbConnection.php';
    $_SESSION["id"] = 1;



    $sql = "SELECT * FROM settings WHERE id='1';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $name = $row["name"];
            $value = $row["value"];
        }
    }

    $sql1 = "SELECT * FROM settings WHERE id='2';";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
        // output data of each row
        while ($row1 = $result1->fetch_assoc()) {
            $id1 = $row1["id"];
            $name1 = $row1["name"];
            $value1 = $row1["value"];
        }
    }
    $sql2 = "SELECT * FROM settings WHERE id='3';";
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        // output data of each row
        while ($row2 = $result2->fetch_assoc()) {
            $id2 = $row2["id"];
            $name2 = $row2["name"];
            $value2 = $row2["value"];
        }
    }

    $sql3 = "SELECT * FROM settings WHERE id='4';";
    $result3 = $conn->query($sql3);

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row3 = $result3->fetch_assoc()) {
            $id3 = $row3["id"];
            $name3 = $row3["name"];
            $value3 = $row3["value"];
        }
    }
    ?>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Architect WebSite | Settings</title>

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
                                    <img alt="image" style="width:55px;height:55px;" class="img-circle" src="uploads/architect/<?php echo $_SESSION["id"]; ?>.jpeg" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Priyantha Premathilake</strong>
                                        </span>  </span> </a>

                            </div>
                        </li>
                        <?php
                        $sql = "select COUNT(post.id) as count from post left join project on project.id = post.project_id where post.seen = 0 and project.architect_id = " . $_SESSION["id"] . " and post.byy = \"Client\";";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $count = $row["count"];
                            }
                        }
                        ?>

                        <li>
                            <a href="notification.php"><i class="fa fa-globe"></i> <span class="nav-label">Notifications</span><span class="label label-warning pull-right"><?php echo $count; ?></span></a>

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
                        <li>
                            <a href="reports.php"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistics</span></a>

                        </li>
                        <li  class="active">
                            <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="ArchitectEditProfile.php">Edit Profile</a></li>
                                <li  class="active"><a href="settings.php">General Settings</a></li>
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
                        <h2>General Settings</h2>

                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
                <br>
                <div class="wrapper wrapper-content animated fadeInRight ecommerce">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox-content">
                                <form class="form-horizontal" action="Projects/SaveSettings.php" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="stid" value="1">
                                        <label class="col-lg-4 control-label">Satisfied Clients:</label>

                                        <div class="col-lg-4"><input name="setting" required type="number" placeholder="no." class="form-control" value="<?php echo $value; ?>"> 
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-2">
                                            <button class="btn btn-sm btn-warning" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="ibox-content">
                                <form class="form-horizontal" action="Projects/SaveSettings.php" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="stid" value="2">
                                        <label class="col-lg-4 control-label">Projects Delivered:</label>

                                        <div class="col-lg-4"><input required name="setting" type="number" placeholder="no." class="form-control" value="<?php echo $value1; ?>"> 
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-2">
                                            <button class="btn btn-sm btn-warning" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="ibox-content">
                                <form class="form-horizontal" action="Projects/SaveSettings.php" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="stid" value="3">
                                        <label class="col-lg-4 control-label">Awards Won:</label>

                                        <div class="col-lg-4"><input required name="setting" type="number" placeholder="no." class="form-control" value="<?php echo $value2; ?>"> 
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-2">
                                            <button class="btn btn-sm btn-warning" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="ibox-content">
                                <form class="form-horizontal" action="Projects/SaveSettings.php" method="post" onsubmit="return confirm('Do you really want to Reset the Visitors count?');">
                                    <div class="form-group">
                                        <input type="hidden" name="stid" value="4">
                                        <input type="hidden" name="setting" value="0">
                                        <label class="col-lg-4 control-label">Reset Visitors Count:</label>

                                        <div class="col-lg-4"><input disabled type="number" placeholder="no." class="form-control" value="<?php echo $value3; ?>"> 
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-2">
                                            <button class="btn btn-sm btn-danger" type="submit">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ibox-content">
                                <strong>Backup And Restore</strong>
                                <br>
                                <br>
                                <form class="form-horizontal" action="Projects/restoreDB.php" method="post" onsubmit="return confirm('Do you really want to Restore the DARTABASE?');">
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Backups</label>

                                        <div class="col-lg-4">
                                            <select name="file" class="form-control" required="true">
                                                <option ></option>
                                                <?php
                                                $directory = "./backup/";
                                                $files = glob($directory . "*.sql");

                                                foreach ($files as $file) {
                                                    echo '<option value="'.$file.'">' . $file . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-2">
                                            <button class="btn btn-sm btn-danger" type="submit">Restore</button>


                                        </div>
                                    </div>
                                </form>
                                <form class="form-horizontal" action="Projects/backupDB.php" method="post">
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label"></label>

                                        <div class="col-lg-4">

                                        </div>
                                        <div class="col-lg-offset-1 col-lg-2">

                                            <button class="btn btn-sm btn-primary" type="submit">Backup</button>

                                        </div>
                                    </div>
                                </form>
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
                                    $(document).ready(function () {

                                        $('.footable').footable();

                                    });

        </script>

    </body>
    <?php
    $conn->close();
    ?>

</html>
