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
	$date=$row["date"];
        
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

<!--Navbar-->
<div class="top">
	<ul class="navbar theme-d2 left-align large">

		<li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Architect</a></li>
		
	</ul>
</div>

<!--Page Container-->
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 0px">
	<!--The Grid-->
	<div class="row">

		<!-- left panel -->
                <ul id="navigationbarEdit">
            <li><a id="editItem" href="ArchitectNotification.php">Notification</a></li>
            <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
            <li><a id="editItem" href="ArchitectManageProjects.php">Gallery</a></li>
            <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
            <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
            <li><a id="editItem" href="ArchitectEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="activeEdit" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            <li><a id="editItem" href="ArchitectEmployees.php">Employees</a></li>
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>


        <div style="margin-left: 300px">
            <h3>Customer Profile</h3><br><br>
            
            <form>
               <!--Right Column-->
		<div class="col m9">
			<!--Profile-->
			<div class="card-2 round white">
				<div class="container">
					<h4>Profile</h4>
					<p><img src="profcss/prof.jpg" class="circle" style="height:106px;width:106px" alt="Profile"></p>
					
					<p><i class="fa fa-pencil fa-fw margin-right text-theme"></i> Name </p>
					<p><i class="fa fa-home fa-fw margin-right text-theme"></i> Address </p>
				</div>
			</div>
			<br><br>
                        <!--Project-->
			
				<div class="accordion white">
					<div class="dropdown">
					
						
	   					<button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" data-toggle="dropdown"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Projects
	    				<span class="caret"></span></button>
	    				<ul class="dropdown-menu">
	      				<li><a href="ArchitectCustomers3.php">Project 1</a></li>
	      				<li><a href="ArchitectCustomers3.php">Project 2</a></li>
	      				<li><a href="ArchitectCustomers3.php">Project 3</a></li>
	    				</ul>
	  					</div>
					</div>
				<br><br>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        First name:<br>
                        <input type="text" size="15" name="firstname" value="<?php echo $fname ?>" disabled>
                    </div>
                    <div style="display:inline-block;">
                        Middle name:<br>
                        <input type="text" size="15" name="middlename" value="<?php echo $mname ?>" disabled>
                    </div>
                    <div style="display:inline-block;">
                        Last name:<br>
                        <input type="text" size="15" name="lastname" value="<?php echo $lname ?>" disabled>
                    </div>
                </div>  
                <br>
                
                Age:<input type="text" name="age" size="4" value="<?php echo $age ?>" disabled>
                <br><br>
                Address:<br>
                <div style=" padding-left: 2em;">
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
                <br>
                Email:
                <br>
                <input type="text" name="email" size="35" value="<?php echo $email ?>" disabled>
                <br><br>


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

                <br>
                NIC:
                <br>
                <input type="text" name="nic" size="15" value="<?php echo $nic ?> " disabled>

                <br><br>
                Reg. No.:
                <br>
                <input type="text" name="reg" size="15" disabled>

                <br><br>
                Account created date:
                <br>
                <input type="date" name="date" value="<?php echo $date ?>" disabled>

                <br><br>
                User Name:
                <br>
                <input type="text" name="uname" size="15" disabled>
                <br><br>
                Status:
                <select name="cars">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                <br><br>
                
                
            </form><br><br><br>
        </div>

			
		</div>

	</div>
</div>
</div>

               
        <!--Footer-->
<div class="">
	<ul class="navbar theme-d5 left-align medium">

		<li><a class="padding-large theme-d4">You are Logged in as:</a></li>
		
	</ul>
</div>
<!-- <footer class="container theme-d3 padding-18">
	<h5>You are logged in as:</h5>
</footer>

<footer class="container theme-d5 padding-17">
	<p>Name</p>
</footer> -->

<script type="text/javascript">
//My Projects
function myFunction(id){
	var x = document.getElementById('id');
	if (x.className.indexOf("show") == -1) {
		x.className += "show";
		x.previousElementsSibling.className += "theme-d1";
	} else {
		x.className = x.className.replace("show","");
		x.previousElementsSibling.className = 
		x.previousElementsSibling.className.replace("theme-d1","");
	}
}
</script>
</div>
<?php mysqli_close($conn); ?>
    </body>
</html> 