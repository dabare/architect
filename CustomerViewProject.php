<?php
session_start();
require_once './db/dbConnection.php';

$id1 = $_SESSION["id"];
$sql1 = "SELECT * FROM customer WHERE id=" . $id1 . ";";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while ($row = $result1->fetch_assoc()) {
        $id = $row["id"];
        $fname = $row["fname"];
        $mname = $row["mname"];
        $lname = $row["lname"];
    }
}
$id = $_GET['id'];


$sql = "SELECT * FROM project WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $city = $row["city"];
        $estcost = $row["estimated_cost"];
        $progress = $row["progress"];
        $cusID = $row["customer_id"];
        $archID = $row["architect_id"];
    }
}
$archName = "";
$sql = "SELECT * FROM architect WHERE id=" . $archID . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $archName = $row["lname"] . "_" . $row["fname"];
    }
}



$sql = "SELECT * FROM customer WHERE id=" . $cusID . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $cusName = $row["lname"] . "_" . $row["fname"];
    }
}
$sql = "SELECT SUM(amount) FROM invoice WHERE project_id = " . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $TotalPayment = $row["SUM(amount)"];
    }
}

if ($TotalPayment == "") {
    $TotalPayment = 0;
}
?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Architect WebSite | Customer Projects</title>

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
                                    <img alt="image" style="width:55px;height:55px;" class="img-circle" src="uploads/customer/<?php echo $_SESSION["id"]; ?>.jpeg" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $lname; ?><?php echo '_'; ?><?php echo $fname; ?></strong>
                                        </span>  </span> </a>

                            </div>
                        </li>
                        <?php
                        $sql = "select COUNT(post.id) as count from post left join project on project.id = post.project_id where post.seen = 0 and project.customer_id = " . $_SESSION["id"] . " and post.byy = \"Architect\";";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $count = $row["count"];
                            }
                        }
                        ?>
                        <li>
                            <a href="CustomerNotification.php"><i class="fa fa-globe"></i> <span class="nav-label">Notifications</span><span class="label label-warning pull-right"><?php echo $count; ?></span></a>
                        </li>
                        <li class="active">
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
                    <div class="ibox-content text-center">
                        <h1 class="m-b-xxs"><?php echo $title ?></h1>
                    </div>

                </div>
                <div class="wrapper wrapper-content  animated fadeInRight">
                    <div class="row">
                        <?php $v = $progress / 100; ?>
                        <div class="col-lg-4">

                            <div class="contact-box center-version">

                                <a href="FullProjectCustomer.php?id=<?php echo $id; ?>">

                                    <img alt="image" class="img-circle" src="uploads/customer/<?php echo $cusID; ?>.jpeg">


                                    <h3 class="m-b-xs"><strong><?php echo $cusName ?></strong></h3>

                                    <div class="font-bold"><?php echo $city ?></div>
                                    <br>
                                    <br>
                                    <div class="text-left">
                                        Estimated Cost: RS <?php echo $estcost ?> /=
                                        <br>
                                        Payment Done: RS <?php echo $TotalPayment ?> /=
                                        <br>
                                        Remaining Payment: RS <?php echo $estcost - $TotalPayment ?> /=
                                    </div>
                                    <br>
                                    <form action="FullProjectCustomer.php" method="get">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="submit" value="Full Project Details" class="btn btn-xs btn-info">
                                    </form>
                                </a>
                            </div>


                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3>Payments Done:<a href="printProjectPayment.php?id=<?= $id ?>" target="_blank">
                                            <div class="col-sm-2 pull-right"><input required type="submit" class="btn btn-success btn-sm" value="Print">
                                            </div>
                                        </a></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-group" id="accordion">
                                        <?php
                                        $sql = "SELECT * FROM invoice WHERE project_id=" . $id . " ORDER BY date DESC , id DESC;";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            $x = 0;
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<div class="panel panel-default">';
                                                echo '<div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $x . '">' . $row["date"] . '<div class="pull-right">
                                                    RS ' . $row["amount"] . '/=
                                                </div></a>
                                            </h5>
                                        </div>';
                                                echo '<div id="collapse' . $x . '" class="panel-collapse collapse out">';
                                                echo '<div class="panel-body">';
                                                echo '<div style = "display: inline-block;">';
                                                echo 'IN' . $row["id"] . '<br>';
                                                echo $row["type"] . ' ' . $row["chequeno"] . '<br>';
                                                echo '<textarea disabled = "true" id = "description" rows = "2" name = "des" style = "position: center; width: 100%">' . $row["description"] . '</textarea><br><br>';

                                                echo '</div>';
                                                echo '<div style = " display: inline-block; padding-left: 30%;">';



                                                echo '</div>';
                                                echo '<br><br>';
                                                echo '<div style = "height: 10px; background-color: gray;"></div>';

                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                $x++;
                                            }
                                        }
                                        ?>


                                    </div>
                                </div>

                            </div>

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3>Consultants Assigned:<a href="printProjectConsultants.php?id=<?= $id ?>" target="_blank">
                                            <div class="col-sm-2 pull-right"><input required type="submit" class="btn btn-success btn-sm" value="Print"></div></a>
                                    </h3>
                                </div>
                                <div class="panel-body">

                                    <div class="panel-group" id="accordion">
                                        <?php
                                        $sql = "SELECT * FROM consultant_assign WHERE project_id=" . $id . ";";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            $x = 0;
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<div class="panel panel-default">';
                                                echo '<div class="panel-heading">
                                            <h5 class="panel-title">';
                                                if($row["status"] == "Done"){
                                                    
                                                    echo '<input type="button" class="btn btn-xs btn-danger" value="Done!">';
                                                }
                                            
                                                echo '<a data-toggle="collapse" data-parent="#accordion" href="#collapseCon' . $x . '">' . $row["category"] . '<div class="pull-right">
                                                    ' . $row["name"] . '
                                                </div></a>
                                            </h5>
                                        </div>';
                                                echo '<div id="collapseCon' . $x . '" class="panel-collapse collapse out">';
                                                echo '<div class="panel-body">';
                                                echo '<div style = "display: inline-block;">';
                                                echo '<textarea disabled = "true" id = "description" rows = "2" name = "des" style = "position: center; width: 100%">' . $row["description"] . '</textarea><br><br>';
                                                echo '<a target="_blank" href="CustomerViewConsultant.php?id=' . $row["consultant_id"] . '"><button class="btn btn-xs btn-info" >View</button></a>';
                                                echo '</div>';
                                                echo '<div style = " display: inline-block; padding-left: 30%;">';
                                                echo '</div>';
                                                echo '<br><br>';
                                                echo '<div style = "height: 10px; background-color: gray;"></div>';

                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                $x++;
                                            }
                                        }
                                        ?>




                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="ibox ">
                                <div class="ibox-content text-center">

                                    <h3 class="m-b-xxs">Project Timeline</h3>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <dl class="dl-horizontal">
                                                <dt>Completed:</dt>
                                                <dd>
                                                    <div class="progress progress-striped active m-b-sm">
                                                        <div id="myMeter" style="width: <?php echo $progress; ?>%;" class="progress-bar"  value="<?php echo $v; ?>"></div>
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <?php
                                        if ($v == 0.02) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" unchecked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" unchecked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" unchecked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" unchecked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.15) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" unchecked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" unchecked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" unchecked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.3) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" unchecked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" unchecked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.4) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" unchecked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.5) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.6) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" checked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.8) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" checked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" checked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.9) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" checked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" checked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" checked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 1.0) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" checked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" checked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" checked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" checked disabled>Finish<br>';
                                        }
                                        ?>
                                    </div>
                                    <br>

                                    <br>


                                </div>

                            </div>


                            <div class="ibox ">
                                <div class="ibox-content">
                                    <form onsubmit="return PostValidateForm()" action="Projects/SaveProjectPostClient.php" method="post"  enctype="multipart/form-data">
                                        <div style="text-align: left;padding: 2em;">
                                            <input  name="prid"  hidden="true" value="<?php echo $id ?>">
                                            <input  name="by"  hidden="true" value="Client">
                                            <center><h3>Add Post:</h3></center>
                                            <select id="posttype" name="type" onchange="changePoost(this)">
                                                <option value="Post">Post</option>
                                                <option value="Image">Image</option>
                                                <option value="Document">Document</option>
                                            </select> <br><br>
                                            <input id="postfile" type="file" name="fileToUpload"  ><br>
                                            Description:<br>

                                            <textarea id="postdescription" rows="4" name="desc" style="position: center; width: 100%"></textarea><br><br>
                                            <input class="btn btn-sm btn-success" style="width: 40%;"type="submit" name="submit" value="Post"><br>
                                        </div>
                                    </form>
                                </div>
                            </div>



                            <script>

                                document.getElementById("postfile").hidden = true;
                                document.getElementById("postdescription").required = true;
                                function changePoost(element)
                                {
                                    if (element.value == "Post") {
                                        document.getElementById("postfile").value = "";
                                        document.getElementById("postfile").hidden = true;
                                        document.getElementById("postdescription").required = true;

                                    } else {
                                        document.getElementById("postfile").value = "";
                                        document.getElementById("postfile").hidden = false;
                                        document.getElementById("postdescription").required = false;
                                    }

                                    if (element.value == "Image") {
                                        document.getElementById("postfile").accept = "image/*";
                                    }

                                    if (element.value == "Document") {
                                        document.getElementById("postfile").accept = ".pdf";
                                    }

                                }

                                function PostValidateForm() {
                                    if (document.getElementById("posttype").value != "Post") {
                                        if (document.getElementById("postfile").value == "") {
                                            alert("Select an attachmen");
                                            return false;
                                        }

                                    }
                                    return true;
                                }
                            </script>








                            <?php
                            $sql = "SELECT * FROM post WHERE project_id=" . $id . " ORDER BY date DESC;";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $postid = $row["id"];
                                    $postdescription = $row["description"];
                                    $postdate = $row["date"];
                                    $posttype = $row["type"];
                                    $postby = $row["byy"];
                                    $path = $row["format"];

                                    echo '
                             <div class="social-feed-separated">

                            <div class="social-avatar">
                            ';


                                    if ($postby == "Architect") {
                                        echo '
                                <a href="#">
                                   <img alt="image"  src="uploads/architect/' . $archID . '.jpeg">
                                   </a>
                            </div>
                            <div class="social-feed-box">

                                <div class="social-avatar">
                                <a href="#">
                                ' . $archName . '
                                </a>
                                <small class="text-muted">' . $postdate . '</small>
                                </div>
                                ';

                                        echo '
                <form onsubmit="return PostDeleteConfirmeForm()" action="Projects/DeleteClientPost.php" method="post">
                        <input type="text" hidden="true" name="postid" value="' . $postid . '">
                        <input type="text" hidden="true" name="proid" value="' . $id . '">';
                                    } else {
                                        echo '
                                  <a href="#">
                                   <img alt="image" src="uploads/customer/' . $cusID . '.jpeg">
                                   </a>
                            </div>
                            <div class="social-feed-box">

                                <div class="social-avatar">
                                <a href="#">
                                ' . $cusName . '
                                </a>
                                <small class="text-muted">' . $postdate . '</small>
                                </div>
                                ';

                                        echo '
                <form onsubmit="return PostDeleteConfirmeForm()" action="Projects/DeleteProjectPostClient.php" method="post">
                        <input type="text" hidden="true" name="postid" value="' . $postid . '">
                        <input type="text" hidden="true" name="proid" value="' . $id . '">';
                                    }


                                    echo '
                            <div class="social-body">
                                    <p>' . $postdescription . '</p>';

                                    if ($posttype == "Image") {
                                        echo '<a href="uploads/' . $path . '"  target="_blank" ><img class="img-responsive" src="uploads/' . $path . '" ></a>';
                                    } elseif ($posttype == "Document") {
                                        echo '<a class="btn btn-sm btn-success" href="uploads/' . $path . '"  target="_blank">Document></a><br><br>';
                                    }


                                    if ($row["seen"] == 1 && $postby == "Client") {

                                        echo '<font style="float: right;" size="2" color="red">Seen</font><br>';
                                    }
                                    if ($postby == "Client") {
                                        echo '
                            <div class="btn-group">
                                        <input class="btn btn-warning btn-xs" type="submit" value="Remove"><br>
                              </div>';
                                    }
                                    echo '
                </form></div></div></div>';
                                }
                            }







                            $sql = "UPDATE post SET seen=1 WHERE project_id='" . $id . "' AND byy = 'Architect'";
                            mysqli_query($conn, $sql);
                            ?>

                            <script>
                                function PostDeleteConfirmeForm() {
                                    if (confirm("Confirm delete post") == true) {
                                        return true;

                                    } else {
                                        return false;
                                    }
                                }


                                function deleteProject() {
                                    if (confirm("Confirm delete Project ") == true) {


                                        var form = document.createElement("form");
                                        form.setAttribute("method", "post");
                                        form.setAttribute("action", "Projects/DeleteProject.php");




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
