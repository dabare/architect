<?php
require_once './db/dbConnection.php';

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
        <title>Architect</title>
        <link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
        <link rel="stylesheet" type="text/css" href="profcss/style_theme.css">
        <link rel="stylesheet" type="text/css" href="profcss/style.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="profcss/opensans.css">
        <style>
            html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body bgcolor="grey" class="theme-15">

        <!--Navbar-->
        <div class="top">
            <ul class="navbar theme-d2 left-align large">

                <li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Architect</a></li>

            </ul>
        </div>

        <!--Page Container-->
        <div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 0.8%">
            <!--The Grid-->
            <div class="row" style="width: 1000%;">

                <!-- left panel -->
                <ul id="navigationbarEdit" style="margin-top:0px">
                    <li><a id="editItem" href="ArchitectNotification.php">Notification</a></li>
                    <li><a id="activeEdit" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
                    <li><a id="editItem" href="ArchitectManageProjects.php">Gallery</a></li>
                    <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
                    <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
                    <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
                    <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
                    <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
                    <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
                    <li><a id="editItem" href="logout.php">Logout</a></li>

                </ul>
            </div>

            <div style="margin-left:18%">
                <center>
                    <h1><?php echo $title ?></h1>
                </center>
                <div style="width:32%;">

                    <form action="Projects/SaveProjectTitle.php"  method="POST">
                        <h3>Title:</h3>
                        <input type="text" style="width: 90%;"name="title" value="<?php echo $title ?>"><br><br>
                        <input type="text" style="visibility:hidden;"name="id" value="<?php echo $id; ?>">

                        <input style="width: 40%;"type="submit" value="Save"><br>

                    </form>



                    <div style="text-align: center;">
                        <a href="ArchitectCustomers1.php"  target="_blank" ><h4 >Profile</h4></a>

                    </div>
                    <div style="text-align: center;">
                        <div ><img  src="uploads/customer/<?php echo $cusID; ?>.jpeg"  style="height:106px;width:106px" alt="Profile"></div>
                    </div><br>
                    <p><font size="3">Name:  <?php echo $cusName ?>`</font></p>
                    <p><font size="3">City:  <?php echo $city ?></font></p>
                    <p><font size="3">Estimated Cost: RS <?php echo $estcost ?> /=</font></p>
                    <p><font size="3">Payment Done: RS <?php echo $TotalPayment ?> /=</font></p>
                    <p><font size="3">Remaining Payment: RS <?php echo $estcost - $TotalPayment ?> /=</font></p>
                    <a href="FullProjectDetails.php?id=<?php echo $id; ?>">More Details></a>


                    <div id="paymentform">
                        <br><br>
                        <div style="height: 10px; background-color: red;"></div>
                        <div >
                            <h3>New Payment</h3>
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

                                <button type="button" style="width:100px;" onclick="getNewInvoiceNo()">New</button> 
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

                                    $('html,body').animate({
                                        scrollTop: $("#paymentform").offset().top},
                                    'slow');
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
                                    xmlhttp.onreadystatechange = function() {
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
                                <input style="float: right;width: 40%;"type="submit" value="Save"><br>

                            </form>


                            <br>
                            <div style="height: 10px; background-color: red;"></div>

                        </div>
                    </div>


                    <br><br><div style="height: 10px; background-color: white;"></div>
                    <h3>Payments Done:</h3>
                    <div style="height: 10px; background-color: green;"></div>

                    <!--                    <div>
                                            <div style="display: inline-block;">
                                                <h3>2014/04/09</h3>
                                                IN234<br>
                                                CASH<br>
                                                RS 23000/=
                                                <textarea disabled="true" id="description" rows="2" name="des" style="position: center; width: 98%"></textarea><br><br>
                    
                                            </div>
                                            <div style=" display: inline-block; padding-left: 30%;">
                                                <button type="button" style="width:100px;  " onclick="setPayementDetails('234', 'sdf', 'Cheque', '234', 'sdaf', '2013-01-08')">Edit</button> 
                    
                                                <button type="button" style="width:100px; " onclick="deleteInvoice('1')">Delete</button> 
                                            </div>
                                            <br><br>
                                            <div style="height: 10px; background-color: gray;"></div>
                    
                                        </div>-->
                    <?php
                    $sql = "SELECT * FROM invoice WHERE project_id=" . $id . " ORDER BY date DESC , id DESC;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<div>';
                            echo '<div style = "display: inline-block;">';
                            echo '<h3>' . $row["date"] . '</h3>';
                            echo 'IN' . $row["id"] . '<br>';
                            echo $row["type"] . ' ' . $row["chequeno"] . '<br>';
                            echo 'RS ' . $row["amount"] . '/=';
                            echo '<textarea disabled = "true" id = "description" rows = "2" name = "des" style = "position: center; width: 98%">' . $row["description"] . '</textarea><br><br>';

                            echo '</div>';
                            echo '<div style = " display: inline-block; padding-left: 30%;">';
                            echo "<button type = \"button\" style = \"width:100px;  \" onclick = \"setPayementDetails('" . $row["id"] . "', '" . $row["description"] . "', '" . $row["type"] . "', '" . $row["chequeno"] . "', '" . $row["amount"] . "', '" . $row["date"] . "')\">Edit</button>";

                            echo '<button type = "button" style = "width:100px; " onclick="deleteInvoice(\'' . $row["id"] . '\')">Delete</button>';
                            echo '</div>';
                            echo '<br><br>';
                            echo '<div style = "height: 10px; background-color: gray;"></div>';

                            echo '</div>';
                        }
                    }
                    ?>
                </div>

                <div class="margin" style="width:115%;">
                    <div style="background-color: whitesmoke;margin-left: 300px;margin-top: -1150px;">
                        <div style="align-content: center;text-align: left;padding: 2em;">
                            <center><h2>Project Progress</h2></center>
                            <?php
                            $v = $progress / 100;

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

                            <script>
                                function toggleCheckbox1(element)
                                {
                                    if (element.checked) {
                                        document.getElementById("myMeter").value = "0.15";
                                        document.getElementById("c2").disabled = false;
                                    } else {
                                        document.getElementById("myMeter").value = "0.02";
                                        document.getElementById("c2").disabled = true;
                                    }
                                }

                                function toggleCheckbox2(element)
                                {
                                    if (element.checked) {
                                        document.getElementById("myMeter").value = "0.3";
                                        document.getElementById("c1").disabled = true;
                                        document.getElementById("c3").disabled = false;
                                    } else {
                                        document.getElementById("myMeter").value = "0.15";
                                        document.getElementById("c1").disabled = false;
                                        document.getElementById("c3").disabled = true;
                                    }
                                }
                                function toggleCheckbox3(element)
                                {
                                    if (element.checked) {
                                        document.getElementById("myMeter").value = "0.4";
                                        document.getElementById("c2").disabled = true;
                                        document.getElementById("c4").disabled = false;
                                    } else {
                                        document.getElementById("myMeter").value = "0.3";
                                        document.getElementById("c2").disabled = false;
                                        document.getElementById("c4").disabled = true;
                                    }
                                }
                                function toggleCheckbox4(element)
                                {
                                    if (element.checked) {
                                        document.getElementById("myMeter").value = "0.5";
                                        document.getElementById("c3").disabled = true;
                                        document.getElementById("c5").disabled = false;
                                    } else {
                                        document.getElementById("myMeter").value = "0.4";
                                        document.getElementById("c3").disabled = false;
                                        document.getElementById("c5").disabled = true;
                                    }
                                }
                                function toggleCheckbox5(element)
                                {
                                    if (element.checked) {
                                        document.getElementById("myMeter").value = "0.6";
                                        document.getElementById("c4").disabled = true;
                                        document.getElementById("c6").disabled = false;
                                    } else {
                                        document.getElementById("myMeter").value = "0.5";
                                        document.getElementById("c4").disabled = false;
                                        document.getElementById("c6").disabled = true;
                                    }
                                }
                                function toggleCheckbox6(element)
                                {
                                    if (element.checked) {
                                        document.getElementById("myMeter").value = "0.8";
                                        document.getElementById("c5").disabled = true;
                                        document.getElementById("c7").disabled = false;
                                    } else {
                                        document.getElementById("myMeter").value = "0.6";
                                        document.getElementById("c5").disabled = false;
                                        document.getElementById("c7").disabled = true;
                                    }
                                }
                                function toggleCheckbox7(element)
                                {
                                    if (element.checked) {
                                        document.getElementById("myMeter").value = "0.9";
                                        document.getElementById("c6").disabled = true;
                                        document.getElementById("c8").disabled = false;
                                    } else {
                                        document.getElementById("myMeter").value = "0.8";
                                        document.getElementById("c6").disabled = false;
                                        document.getElementById("c8").disabled = true;
                                    }
                                }
                                function toggleCheckbox8(element)
                                {
                                    if (element.checked) {
                                        document.getElementById("myMeter").value = "1.0";
                                        document.getElementById("c7").disabled = true;
                                    } else {
                                        document.getElementById("myMeter").value = "0.9";
                                        document.getElementById("c7").disabled = false;
                                    }
                                }
                            </script>
                            <h5>Completed: </h5>
                            <meter id="myMeter" style="width: 85%;" value="<?php echo $v; ?>"></meter> 
                            <button type="button" onclick="saveProg()">Save</button> <br><br>

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

                    <div style="height: 20px;"></div>




                    <div style="background-color: whitesmoke; margin-left: 300px">
                        <form onsubmit="return PostValidateForm()" action="Projects/SaveProjectPost.php" method="post"  enctype="multipart/form-data">
                            <div style="text-align: left;padding: 2em;">
                                <input  name="prid"  hidden="true" value="<?php echo $id ?>">
                                <input  name="by"  hidden="true" value="Architect">
                                <h3>Add Post:</h3>
                                <select id="posttype" name="type" onchange="changePoost(this)">
                                    <option value="Post">Post</option>
                                    <option value="Image">Image</option>
                                    <option value="Document">Document</option>
                                </select> <br><br>
                                <input id="postfile" type="file" name="fileToUpload"  ><br>
                                Description:<br>

                                <textarea id="postdescription" rows="4" name="desc" style="position: center; width: 100%"></textarea><br><br>
                                <input style="width: 40%;"type="submit" name="submit" value="Post"><br>
                            </div>
                        </form>
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
                    <div style="height: 20px;"></div>




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


                            if ($postby == "Architect") {
                                echo '<div style="background-color: lightblue;margin-left:300px ">
                <form onsubmit="return PostDeleteConfirmeForm()" action="Projects/DeleteProjectPost.php" method="post">
                    <div style="text-align: left;padding: 2em;">
                        <input type="text" hidden="true" name="postid" value="' . $postid . '">
                        <input type="text" hidden="true" name="proid" value="' . $id . '">
                        <h3>By:Me</h3>';
                            } else {

                                echo '<div style="background-color: lightgreen;margin-left:300px ">
                <form onsubmit="return PostDeleteConfirmeForm()" action="Projects/DeleteProjectPost.php" method="post">
                    <div style="text-align: left;padding: 2em;">
                        <input type="text" hidden="true" name="postid" value="' . $postid . '">
                        <input type="text" hidden="true" name="proid" value="' . $id . '">
                        <h3>By:Client</h3>';
                            }



                            if ($posttype == "Image") {
                                echo '<a href="uploads/' . $path . '"  target="_blank" ><img src="uploads/' . $path . '" style="width:  20%;"></a>';
                            } elseif ($posttype == "Document") {
                                echo '<a href="uploads/' . $path . '"  target="_blank">PDF:></a><br>';
                            }

                            echo '<br>

                        <textarea id="description" rows="4" style="font-size: 20px;position: center; width: 100%" disabled="true">' . $postdescription . '</textarea><br><br>'
                            . 'ID:' . $postid . ' <font style="margin-left:5em;" size="2" color="blue">Data:' . $postdate . '</font>';

                            if ($row["seen"] == 1 && $postby == "Architect") {

                                echo '<font style="float: right;" size="2" color="red">Seen</font><br>';
                            }
                            echo '<input style="float: right;width: 40%;"type="submit" value="Remove"><br>
                    </div>
                </form>

            </div>
            <div style="height: 20px;"></div>';
                        }
                    }







                    $sql = "UPDATE post SET seen=1 WHERE project_id='" . $id . "' AND byy = 'Client'";
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

                    <div style="background-color: whitesmoke; margin-left: 300px">
                        <center>
                            <br><br>
                            <button type="button"  style="color: red;width: 80%;height: 30px;" onclick="deleteProject()">Delete This Project</button>
                        </center>
                    </div>
                </div>

            </div>
            <?php $conn->close(); ?>
        </div>
    </body>
</html> 

