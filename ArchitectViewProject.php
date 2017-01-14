<?php
session_start();
require_once './db/dbConnection.php';
$_SESSION["id"] = 1;

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
        $priority = $row["priority"];
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
        $searchN = $row["lname"];
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

        <title>Project</title>

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

                        <li >
                            <a href="notification.php"><i class="fa fa-globe"></i> <span class="nav-label">Notifications</span><span class="label label-warning pull-right"><?php echo $count; ?></span></a>

                        </li>
                        <li >
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
                    <div class="ibox-content text-center">
                        <h1 class="m-b-xxs"><?php echo $title ?></h1>
                    </div>

                </div>
                <div class="wrapper wrapper-content  animated fadeInRight">
                    <div class="row">
                        <?php $v = $progress / 100; ?>
                        <div class="col-lg-4">
                            <div class="ibox">

                                <div class="ibox-content">
                                    <form role="form" class="form-inline" action="Projects/SaveProjectTitle.php"  method="POST">

                                        <div class="col-lg-3"><h3 class="m-b-xxs">Title:</h3></div>
                                        <div class="col-lg-9">
                                            <div class="form-group"><input  required type="text" placeholder="Tite" name="title" value="<?php echo $title ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div></div>
                                        <div class="col-lg-3"><h3 class="m-b-xxs">Priority:</h3></div>
                                        <div class="col-lg-9">
                                            <div class="form-group"><input min="1" max="5"  required type="number" placeholder="1-5" name="priority" value="<?php echo $priority ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><input type="text" style="visibility:hidden;"name="id" value="<?php echo $id; ?>"></div>
                                        <div class="form-group ">
                                            <input class="btn btn-xs btn-warning btn-rounded" type="submit" value="Save">
                                        </div>

                                    </form>
                                </div>


                            </div>
                            <div class="contact-box center-version">

                                <a href="customer.php?search=<?= $searchN ?>">

                                    <img alt="image" class="img-circle" src="uploads/customer/<?php echo $cusID; ?>.jpeg">


                                    <h3 class="m-b-xs"><strong><?php echo $cusName ?></strong></h3>

                                    <div class="font-bold"><?php echo $city ?></div>
                                    <br>
                                    <br>
                                    <div class="text-left">
                                        Estimated Cost: RS <?php echo number_format($estcost); ?> /=
                                        <br>
                                        Payment Done: RS <?php echo number_format($TotalPayment); ?> /=
                                        <br>
                                        Remaining Payment: RS <?php echo number_format($estcost - $TotalPayment); ?> /=
                                    </div>
                                    <br>
                                    <form action="FullProjectDetails.php" method="get">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="submit" value="Full Project Details" class="btn btn-xs btn-info">
                                    </form>
                                </a>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3>New Payment</h3>
                                </div>
                                <div class="panel-body">


                                    <form onsubmit="return PaymetnValidateForm()" id="payment" action="Projects/SaveProjectPayment.php" method="post" >
                                        Invoice No.:<br>

                                        <input disabled="true" required name="inid" id="invoicenum" type="text" style="width: 70%; "><br><br>

                                        <input id="prid" name="prid" hidden="true" value="<?php echo $id ?>">
                                        Description:<br>
                                        <textarea id="descriptio" rows="4" name="des" style="position: center; width: 98%"></textarea><br><br>

                                        Type:<br>
                                        <select id="paymenttype" name="type" style="width: 70%;" onchange="changePayment(this)">
                                            <option value="Cheque">Cheque</option>
                                            <option value="Cash" >Cash</option>
                                        </select> 

                                        <br>Cheque No.:<br><input id="chequeno" name="cno" type="text" style="width: 70%; "><br><br>

                                        <br>Amount RS:<br><input required id="amount" name="amount" type="number" style="width: 70%; "><br><br>

                                        Date:<br><input required id="date" name="date" type="date" style="width: 70%">
                                        <br>
                                        <br>

                                        <button class="btn btn-xs btn-primary" type="button" style="width:100px;" onclick="getNewInvoiceNo()">New</button> 
                                        <input class="btn btn-xs btn-warning" style="float: right;width: 40%;"type="submit" value="Save"><br>
                                        <script>

                                            document.getElementById("date").valueAsDate = new Date();
                                            getNewInvoiceNo();

                                            function deleteInvoice(inid) {
                                                if (confirm("Confirm delete invoice IN" + inid) == true) {


                                                    var form = document.createElement("form");
                                                    form.setAttribute("method", "post");
                                                    form.setAttribute("action", "Projects/DeleteProjectPaymentRecord.php");



                                                    var pid = document.createElement("input");
                                                    pid.setAttribute("type", "hidden");
                                                    pid.setAttribute("name", "prid");
                                                    pid.setAttribute("value", <?php echo $id ?>);


                                                    form.appendChild(pid);

                                                    var iid = document.createElement("input");
                                                    iid.setAttribute("type", "hidden");
                                                    iid.setAttribute("name", "inid");
                                                    iid.setAttribute("value", inid);


                                                    form.appendChild(iid);



                                                    document.body.appendChild(form);
                                                    form.submit();
                                                } else {

                                                }

                                            }


                                            function setPayementDetails(inv, des, typ, cn, amount, date) {
                                                document.getElementById("invoicenum").value = inv;
                                                document.getElementById("descriptio").value = des;
                                                document.getElementById("paymenttype").value = typ;
                                                document.getElementById("chequeno").value = cn;
                                                document.getElementById("amount").value = amount;
                                                document.getElementById("date").value = date;
                                                changePayment(document.getElementById("paymenttype"));
                                            }



                                            function getNewInvoiceNo() {

                                                var xmlhttp = new XMLHttpRequest();
                                                xmlhttp.onreadystatechange = function () {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        document.getElementById("invoicenum").value = this.responseText;
                                                        document.getElementById("descriptio").value = "";
                                                        document.getElementById("chequeno").value = "";
                                                        document.getElementById("amount").value = "";
                                                        document.getElementById("date").valueAsDate = new Date();
                                                    }
                                                };
                                                xmlhttp.open("GET", "Projects/GetNewInvoiceNo.php", true);
                                                xmlhttp.send();

                                            }

                                            document.getElementById("chequeno").required = true;
                                            function changePayment(element)
                                            {
                                                if (element.value == "Cheque") {
                                                    document.getElementById("chequeno").disabled = false;
                                                    document.getElementById("chequeno").required = true;
                                                } else {
                                                    document.getElementById("chequeno").disabled = true;
                                                    document.getElementById("chequeno").required = false;
                                                    document.getElementById("chequeno").value = "";
                                                }
                                            }

                                            function PaymetnValidateForm() {

                                                document.getElementById("invoicenum").disabled = false;
                                                return true;
                                            }
                                        </script>


                                    </form>


                                </div>
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
                                                    RS ' . number_format($row["amount"]) . '/=
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
                                                echo "<button class=\"btn btn-xs btn-warning\" type = \"button\" style = \"width:100px;  \" onclick = \"setPayementDetails('" . $row["id"] . "', '" . $row["description"] . "', '" . $row["type"] . "', '" . $row["chequeno"] . "', '" . $row["amount"] . "', '" . $row["date"] . "')\">Edit</button>";

                                                echo '<button class="btn btn-xs btn-danger" type = "button" style = "width:100px; " onclick="deleteInvoice(\'' . $row["id"] . '\')">Delete</button>';
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

                                    <div class="text-center">
                                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Assign a Consultant</a>
                                    </div>
                                    <div id="modal-form" class="modal fade" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="b-r">
                                                            <h3 class="m-t-none m-b">Assign Consultant</h3>

                                                            <form role="form" method="POST" action="./Projects/SaveProjectConsultant.php">
                                                                <input type="hidden" value="<?=$id?>" name="project_id">
                                                                <div class="form-group">
                                                                    <label>Select Consultant:</label>
                                                                    <select required="true" class="form-control m-b" name="consultant">
                                                                        <?php
                                                                        $sqll = "select * from consultants where id not in (select consultant_id from consultant_assign where project_id = $id);";
                                                                        $resultt = $conn->query($sqll);
                                                                        if ($resultt->num_rows > 0) {
                                                                            while ($roww = $resultt->fetch_assoc()) {
                                                                                echo '<option>' . $roww["id"] . '_'. $roww["lname"].' '. $roww["fname"].'_'. $roww["category"].' </option>';
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description</label> 
                                                                    <textarea name="description" required="true" placeholder="Description" cols="5" rows="5" class="form-control"></textarea>
                                                                </div>
                                                                <div>
                                                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Assign</strong></button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
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
                                                echo '<a target="_blank" href="ArchitectViewConsultant.php?id='.$row["consultant_id"].'"><button class="btn btn-xs btn-info" >View</button></a>';
                                                echo '</div>';
                                                echo '<div style = " display: inline-block; padding-left: 30%;">';
                                                echo '<form onsubmit="return confirm(\'Do you really want to remove the Consultant?\');" action="Projects/DeleteProjectConsultant.php" method="POST">';
                                                echo '<input type="hidden" name="consultant_id" value="'.$row["consultant_id"].'">';
                                                echo '<input type="hidden" name="project_id" value="'.$row["project_id"].'">';
                                                echo '<button class="btn btn-xs btn-danger" type = "submit" style = "width:100px; " >Remove</button>';
                                                echo '</form>';
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
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" unchecked>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" unchecked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" unchecked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" unchecked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.15) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked >Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" unchecked >Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" unchecked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" unchecked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.3) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked >Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" unchecked >Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" unchecked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.4) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked >Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" unchecked >Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.5) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked >Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" unchecked >Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.6) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" checked >Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" unchecked >Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.8) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" checked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" checked >Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" unchecked >Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked disabled>Finish<br>';
                                        } elseif ($v == 0.9) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" checked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" checked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" checked >Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" unchecked >Finish<br>';
                                        } elseif ($v == 1.0) {
                                            echo '<input type = "checkbox" id = "c1" onchange = "toggleCheckbox1(this)" checked disabled>Interview and initial discussions <br>';
                                            echo '<input type = "checkbox" id = "c2" onchange = "toggleCheckbox2(this)" checked disabled>Information gathering<br>';
                                            echo '<input type = "checkbox" id = "c3" onchange = "toggleCheckbox3(this)" checked disabled>Schematic Design and Feasibility<br>';
                                            echo '<input type = "checkbox" id = "c4" onchange = "toggleCheckbox4(this)" checked disabled>Design Development and Permit Documents<br>';
                                            echo '<input type = "checkbox" id = "c5" onchange = "toggleCheckbox5(this)" checked disabled>Construction Documents and Permit Acquisition<br>';
                                            echo '<input type = "checkbox" id = "c6" onchange = "toggleCheckbox6(this)" checked disabled>Selection of a General Contractor<br>';
                                            echo '<input type = "checkbox" id = "c7" onchange = "toggleCheckbox7(this)" checked disabled>Construction Administration<br>';
                                            echo '<input type = "checkbox" id = "c8" onchange = "toggleCheckbox8(this)" checked >Finish<br>';
                                        }
                                        ?>
                                    </div>
                                    <br>
                                    <div class="pull-right">
                                        <button class="btn btn-sm btn-warning" type="button" onclick="saveProg()">Save</button>
                                    </div>
                                    <br>
                                    <script>
                                        function toggleCheckbox1(element)
                                        {
                                            if (element.checked) {
                                                document.getElementById("myMeter").style = "width: 15%";
                                                document.getElementById("myMeter").value = "0.15";
                                                document.getElementById("c2").disabled = false;
                                            } else {
                                                document.getElementById("myMeter").style = "width: 2%";
                                                document.getElementById("myMeter").value = "0.02";
                                                document.getElementById("c2").disabled = true;
                                            }
                                        }

                                        function toggleCheckbox2(element)
                                        {
                                            if (element.checked) {
                                                document.getElementById("myMeter").style = "width: 30%";
                                                document.getElementById("myMeter").value = "0.3";
                                                document.getElementById("c1").disabled = true;
                                                document.getElementById("c3").disabled = false;
                                            } else {
                                                document.getElementById("myMeter").style = "width: 15%";
                                                document.getElementById("myMeter").value = "0.15";
                                                document.getElementById("c1").disabled = false;
                                                document.getElementById("c3").disabled = true;
                                            }
                                        }
                                        function toggleCheckbox3(element)
                                        {
                                            if (element.checked) {
                                                document.getElementById("myMeter").style = "width: 40%";
                                                document.getElementById("myMeter").value = "0.4";
                                                document.getElementById("c2").disabled = true;
                                                document.getElementById("c4").disabled = false;
                                            } else {
                                                document.getElementById("myMeter").style = "width: 30%";
                                                document.getElementById("myMeter").value = "0.3";
                                                document.getElementById("c2").disabled = false;
                                                document.getElementById("c4").disabled = true;
                                            }
                                        }
                                        function toggleCheckbox4(element)
                                        {
                                            if (element.checked) {
                                                document.getElementById("myMeter").style = "width: 50%";
                                                document.getElementById("myMeter").value = "0.5";
                                                document.getElementById("c3").disabled = true;
                                                document.getElementById("c5").disabled = false;
                                            } else {
                                                document.getElementById("myMeter").style = "width: 40%";
                                                document.getElementById("myMeter").value = "0.4";
                                                document.getElementById("c3").disabled = false;
                                                document.getElementById("c5").disabled = true;
                                            }
                                        }
                                        function toggleCheckbox5(element)
                                        {
                                            if (element.checked) {
                                                document.getElementById("myMeter").style = "width: 60%";
                                                document.getElementById("myMeter").value = "0.6";
                                                document.getElementById("c4").disabled = true;
                                                document.getElementById("c6").disabled = false;
                                            } else {
                                                document.getElementById("myMeter").style = "width: 50%";
                                                document.getElementById("myMeter").value = "0.5";
                                                document.getElementById("c4").disabled = false;
                                                document.getElementById("c6").disabled = true;
                                            }
                                        }
                                        function toggleCheckbox6(element)
                                        {
                                            if (element.checked) {
                                                document.getElementById("myMeter").style = "width: 80%";
                                                document.getElementById("myMeter").value = "0.8";
                                                document.getElementById("c5").disabled = true;
                                                document.getElementById("c7").disabled = false;
                                            } else {
                                                document.getElementById("myMeter").style = "width: 60%";
                                                document.getElementById("myMeter").value = "0.6";
                                                document.getElementById("c5").disabled = false;
                                                document.getElementById("c7").disabled = true;
                                            }
                                        }
                                        function toggleCheckbox7(element)
                                        {
                                            if (element.checked) {
                                                document.getElementById("myMeter").style = "width: 90%";
                                                document.getElementById("myMeter").value = "0.9";
                                                document.getElementById("c6").disabled = true;
                                                document.getElementById("c8").disabled = false;
                                            } else {
                                                document.getElementById("myMeter").style = "width: 80%";
                                                document.getElementById("myMeter").value = "0.8";
                                                document.getElementById("c6").disabled = false;
                                                document.getElementById("c8").disabled = true;
                                            }
                                        }
                                        function toggleCheckbox8(element)
                                        {
                                            if (element.checked) {
                                                document.getElementById("myMeter").style = "width: 100%";
                                                document.getElementById("myMeter").value = "1";
                                                document.getElementById("c7").disabled = true;
                                            } else {
                                                document.getElementById("myMeter").style = "width: 90%";
                                                document.getElementById("myMeter").value = "0.9";
                                                document.getElementById("c7").disabled = false;
                                            }
                                        }
                                    </script>
                                    <script>
                                        function saveProg() {

                                            var val = document.getElementById("myMeter").value;
                                            var form = document.createElement("form");
                                            form.setAttribute("method", "post");
                                            form.setAttribute("action", "Projects/SaveProjectProgress.php");



                                            var id = document.createElement("input");
                                            id.setAttribute("type", "hidden");
                                            id.setAttribute("name", "id");
                                            id.setAttribute("value", <?php echo $id; ?>);


                                            form.appendChild(id);


                                            var value = document.createElement("input");
                                            value.setAttribute("type", "hidden");
                                            value.setAttribute("name", "value");
                                            value.setAttribute("value", val);


                                            form.appendChild(value);


                                            document.body.appendChild(form);
                                            form.submit();

                                        }

                                    </script>
                                </div>

                            </div>


                            <div class="ibox ">
                                <div class="ibox-content">
                                    <form onsubmit="return PostValidateForm()" action="Projects/SaveProjectPost.php" method="post"  enctype="multipart/form-data">
                                        <div style="text-align: left;padding: 2em;">
                                            <input  name="prid"  hidden="true" value="<?php echo $id ?>">
                                            <input  name="by"  hidden="true" value="Architect">
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
                <form onsubmit="return PostDeleteConfirmeForm()" action="Projects/DeleteProjectPost.php" method="post">
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
                <form onsubmit="return PostDeleteConfirmeForm()" action="Projects/DeleteProjectPost.php" method="post">
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


                                    if ($row["seen"] == 1 && $postby == "Architect") {

                                        echo '<font style="float: right;" size="2" color="red">Seen</font><br>';
                                    }
                                    if ($postby == "Architect") {
                                        echo '
                            <div class="btn-group">
                                        <input class="btn btn-warning btn-xs" type="submit" value="Remove"><br>
                              </div>';
                                    }
                                    echo '
                </form></div></div></div>';
                                }
                            }







                            $sql = "UPDATE post SET seen=1 WHERE project_id='" . $id . "' AND byy = 'Client'";
                            mysqli_query($conn, $sql);
                            ?>


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
