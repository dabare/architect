<?php
require_once './db/dbConnection.php';

$id = $_GET['id'];


$sql = "SELECT * FROM customer WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $cusid = $row["id"];
        $fname = $row["fname"];
        $mname = $row["mname"];
        $lname = $row["lname"];
        $age = $row["age"];
        $add_no = $row["add_no"];
        $add_street = $row["add_street"];
        $add_city = $row["add_city"];
        $email = $row["email"];
        $mobile_no = $row["mobile_no"];
        $land_no = $row["land_no"];
        $nic = $row["nic"];
        $date = $row["created"];
    }
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

            /* The Modal (background) */
            .modal {
                display: none; 
                position: fixed; 
                z-index: 1; 
                padding-top: 70px; 
                left: 0;
                top: 0;
                width: 100%; 
                height: 100%; 
                overflow: auto; 
                background-color: rgb(0,0,0); 
                background-color: rgba(0,0,0,0.4); 
            }

            /* Modal Content */
            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                border: 1px solid #888;
                width: 40%;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                -webkit-animation-name: animatetop;
                -webkit-animation-duration: 0.4s;
                animation-name: animatetop;
                animation-duration: 0.4s
            }

            /* Animation */
            @-webkit-keyframes animatetop {
                from {top:-300px; opacity:0}
                to {top:0; opacity:1}
            }

            @keyframes animatetop {
                from {top:-300px; opacity:0}
                to {top:0; opacity:1}
            }

            /* The Close Button */
            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            .close2 {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close2:hover,
            .close2:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
            .modal-header {
                padding: 2px 16px;
                background-color: #5cb85c;
                color: white;
            }

            .modal-body {padding: 2px 16px;}

            .modal-footer {
                padding: 2px 16px;
                background-color: #5cb85c;
                color: white;
            }

        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body bgcolor="grey" class="theme-15">
        <div class="top">
            <ul class="navbar theme-d2 left-align large">
                <li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Architect</a><li>
            </ul>
        </div>

        <!--Page Container-->
        <div class="container content" style="max-width:1400px;margin-top:50px;margin-left:10px">
            <!--The Grid-->
            <div class="row">
                <!--Left Panel-->
                <div class="col-m2">
                    <ul id="navigationbarEdit">
                        <li><a id="editItem" href="ArchitectNotification.php">Notification</a></li>
                        <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
                        <li><a id="editItem" href="ArchitectManageProjects.php">Gallery</a></li>
                        <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
                        <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>

                        <li><a id="activeEdit" href="ArchitectCustomers.php">Customers</a></li>
                        <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>            
                        <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
                        <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
                        <li><a id="editItem" href="logout.php">Logout</a></li>
                    </ul>
                </div>

                <div style="margin-left:18%;padding:1px 16px;">


                    <!--Customer List-->
                    <div class="col-m2">
                        <div id="saltbl" style="text-align: center ; overflow: scroll ; height: 90vh;width: 200px;">
                            <ul style="list-style: none">
                                <?php
                                $sql = "SELECT * FROM customer;";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li><a id="editItem" href="ArchitectCustomers1.php?id=' . $row["id"] . '">' . $row["fname"] . '</a></li><br>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>            			
                    </div>
                    <!--Customer Details-->
                    <div class="col-m2" style="margin-left: 300px;margin-top: -600px;">
                        <div class="row">
                            <center><h2>Customer</h2></center><br><br>
                        </div>
                        <div class="container">
                            <h4>Profile</h4>
                            <p><img src="profcss/prof.jpg" class="circle" style="height:106px;width:106px" alt="Profile"></p>
                        </div>
                        <br><br>
                        <div>
                            Address:<br>

                            No:
                            <br>
                            <input type="text" size="10" name="no" value="<?php echo $add_no ?>" disabled>
                            <br>
                            Street:
                            <br>
                            <input type="text" name="street" value="<?php echo $add_street ?>" disabled>
                            <br>
                            City:
                            <br>
                            <input type="text" name="city" value="<?php echo $add_city ?>" disabled>

                        </div>
                    </div>
                    <div class="col-m2" style="margin-left: 500px;margin-top: -300px;">            				

                        <div style="display:inline-block;">
                            First name:<br>
                            <input type="text" size="15" name="firstname" value="<?php echo $fname ?>" disabled>
                        </div>
                        <div style="display:inline-block;">
                            Middle name:<br>
                            <input type="text" size="15" name="middlename" value="<?php echo $mname ?>" disabled>
                        </div>
                        <br>
                        <div style="text-align: left;">
                            <div style="display:inline-block;">
                                Last name:<br>
                                <input type="text" size="15" name="lastname" value="<?php echo $lname ?>" disabled>
                            </div>
                        </div>                          
                        <br>
                        <div style="text-align: left;">
                            <div style="display:inline-block;">
                                Age:<br><input type="text" name="age" size="4" value="<?php echo $age ?>" disabled>
                            </div>
                            <div style="display:inline-block;">
                                NIC:<br><input type="text" name="nic" size="15" value="<?php echo $nic ?> " disabled>
                            </div>
                        </div>
                        <div style="text-align: left;">
                            Email:<br>
                            <input type="text" name="email" size="35" value="<?php echo $email ?>" disabled>
                            <br><br>
                        </div>
                        <div style="text-align: left;">
                            <div style="display:inline-block;">
                                Mobile No:
                                <br>
                                <input type="text" name="mobile" size="10" value="<?php echo $mobile_no ?>" disabled>
                            </div>
                            <div style="display:inline-block;">
                                Land No:
                                <br>
                                <input type="text" name="land" size="10" value="<?php echo $land_no ?>" disabled>
                            </div>
                        </div>
                        <div style="text-align: left;">
                            Account created date:<br>
                            <input type="date" name="created" value="<?php echo $date ?> " disabled>
                        </div>
                        <br>
                        <br>


                        <!-- Open The Modal -->
                        <button id="myBtn" class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" onclick="onclick()"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Add New Project</button></center>

                        <!-- Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span class="close">x</span>
                                    <h2>Add New Project</h2>

                                </div>
                                <div class="modal-body">
                                    <form name='register' method='post' action='Controllers/insertProject.php' >
                                        <?php
                                        require_once './db/dbConnection.php';

                                        $id = $_GET['id'];


                                        $sql = "SELECT * FROM customer WHERE id=" . $id . ";";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $cusid = $row["id"];
                                                
                                            }
                                        }
                                        ?>


                                        <table>
                                            <tr>
                                                <td><label for="category">Category:</label></td>
                                                <td><select class="form-control" id="category" name="category" required/>
                                            <option value="Industrial">Industrial</option>
                                            <option value="Community">Community</option>
                                            <option value="Residential">Residential</option>
                                            </td>

                                            </tr>
                                            <tr>
                                                <td><b>Customer ID:</b></td>
                                                <td><input type='id' name='cusid' value="<?php echo $cusid;?>" disabled="disabled"/></td>
                                            </tr>
                                            <tr>
                                                <td><b>Date:</b></td>
                                                <td><input type='date' name='pdate' required/></td>
                                            </tr>
                                            <tr>
                                                <td><b>Location:</b></td>
                                                <td><input type='text' name='location' required/></td>
                                            </tr>
                                            <tr>
                                                <td><b>Satus:</b></td>
                                                <td><input type='text' name='status' required/></td>
                                            </tr>
                                            <tr>
                                                <td><b>URL:</b></td>
                                                <td><input type='text' name='url' required/></td>
                                            </tr>
                                            <tr>
                                                <td><b>Description:</b></td>
                                                <td><input type='text' name='description' required/></td>
                                            </tr>
                                            <tr>
                                                <td><b>Progress:</b></td>
                                                <td><input type='int' name='progress' required/></td>
                                            </tr>
                                            <tr>
                                                <td><b>Estimated Duration:</b></td>
                                                <td><input type='text' name='estimated_duration' required/></td>
                                            </tr>
                                            <tr>
                                                <td><b>Estimated Cost:</b></td>
                                                <td><input type="int" name="estimated_cost" required/></td>
                                            </tr>
                                            <tr>
                                                <td><b>City:</b></td>
                                                <td><input type='text' name='city' required/></td>
                                            </tr>
                                            <tr>
                                                <td><b>Title:</b></td>
                                                <td><input type='text' name='title' required/></td>
                                            </tr>



                                            <tr>
                                                <td colspan='2' align='center'> <input type="submit" name="submit" class="button" value="Register"/>

                                                    <input type="reset" class="button" value="Cancel"/> </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="col-m2">

                        <div id="saltbl" style="text-align: center ; margin-left:850px; margin-top:-535px; overflow: scroll ; height: 90vh;width: 200px;">
                            <h4>Projects</h4>
                            <ul style="list-style: none">
<?php
$sql = "SELECT * FROM project WHERE customer_id = '$id';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<li><a id="editItem" href="ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["title"] . '</a></li><br>';
    }
}
?>
                            </ul>
                        </div> 



                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var modal2 = document.getElementById('myModal2');
        var btn2 = document.getElementById("myBtn2");
        var span = document.getElementsByClassName("close2")[0];
        btn2.onclick = function () {
            modal2.style.display = "block";
        }
        span.onclick = function () {
            modal2.style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }

    </script>

</body>



