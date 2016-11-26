<?php
require_once './db/dbConnection.php';

$id = $_GET['id'];


$sql = "SELECT * FROM customer WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
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
	$date=$row["created"];
        
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
            		<li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            		<li><a id="activeEdit" href="ArchitectCustomers.php">Customers</a></li>
            		<li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>            
            		<li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            		<li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            		<li><a id="editItem" href="index.php">Logout</a></li>
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
                            <h2><center>Customer</center></h2><br><br>
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
            			</div>
                    
                        
            			
            	</div>
            </div>
        </div>
    </div>
</body>



