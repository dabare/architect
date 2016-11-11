<?php
require_once './db/dbConnection.php';


$id = 2;

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
<title>Customer</title>
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

		<li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Customer Profile</a></li>
		
	</ul>
</div>

<!--Page Container-->
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 0px">
	<!--The Grid-->
	<div class="row">

		<!-- left panel -->
                <ul id="navigationbarEdit">
            <li><a id="editItem" href="CustomerNotification.php">Notification</a></li>
            <li><a id="activeEdit" href="CustomerEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="CustomerMyProject.php">My Projects</a></li>
            <li><a id="editItem" href="CustomerMakeAppointments.php">Make Appointment</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
            </ul>
        <div style="margin-left: 300px">
            <h3>Edit Your Profile</h3><br><br>
            
           
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
                        
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        First name:<br>
                        <textarea id="cusfname" cols="10" rows="1" name="firstname"><?php echo $fname ?></textarea>
                    </div>
                    <div style="display:inline-block;">
                        Middle name:<br>
                        <textarea id="cusmname" cols="10" rows="1" name="middlename" ><?php echo $mname ?></textarea>
                    </div>
                    <div style="display:inline-block;">
                        Last name:<br>
                        <textarea id="cuslname" cols="10" rows="1" name="lastname" ><?php echo $lname ?></textarea>
                    </div>
                </div>  
                <br>
                
                Age:<textarea id="cusage" cols="5" rows="1" name="age"  ><?php echo $age ?></textarea>
                <br><br>
                Address:<br>
                <div style=" padding-left: 2em;">
                    No:
                    <br>
                    <textarea id="no" cols="10" rows="1" name="no" ><?php echo $add_no ?></textarea>
                    <br>
                    Street:
                    <br>
                    <textarea id="street" cols="20" rows="1" name="street" ><?php echo $add_street ?></textarea>
                    <br>
                    City:
                    <br>
                    <textarea id="city" cols="10" rows="1" name="city" ><?php echo $add_city ?></textarea>
                </div>
                <br>
                Email:
                <br>
                <textarea id="cusemail" cols="15" rows="1" name="email"  ><?php echo $email ?></textarea>
                <br><br>


                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        Mobile No:
                        <br>
                        <textarea id="mobile" cols="10" rows="1" name="mobile"  ><?php echo $mobile_no ?></textarea>
                    </div>
                    <div style="display:inline-block;">
                        Land No:
                        <br>
                        <textarea id="land"cols="10" rows="1" name="land" ><?php echo $land_no ?></textarea>
                    </div>
                </div>  

                <br>
                NIC:
                <br>
                <textarea id="nic" cols="10" rows="1" name="nic" ><?php echo $nic ?></textarea>

                <br><br>
                Account created date:
                <br>
                <textarea type="date" name="date" disabled=""><?php echo $date ?></textarea><br><br>

                User Name:
                <br>
                <textarea id="uname" cols="10" rows="1" name="username"  ></textarea>
                <br><br>
                
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        Password:<br>
                        <textarea id="password" cols="10" rows="1" name="password" ></textarea>
                    </div>
                    <div style="display:inline-block;">
                        Re Enter Password:<br>
                        <textarea id="repassword" cols="10" rows="1" name="repassword" ></textarea>
                    </div>
                    
                </div> <br><br> 
                
                <div style="text-align: center;">
                    <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" onclick="saveAward()"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Save
                    </button>
                    <script>
                            function saveAward() {


                                var form = document.createElement("form");
                                form.setAttribute("method", "post");
                                form.setAttribute("hidden", "true");
                                form.setAttribute("action", "Projects/SaveCustomers.php");




                                var cid = document.createElement("input");
                                cid.setAttribute("type", "hidden");
                                cid.setAttribute("name", "cusid");
                                cid.setAttribute("value", <?php echo $id ?>);


                                form.appendChild(cid);



                                form.appendChild(document.getElementById("cusfname"));
                                form.appendChild(document.getElementById("cusmname"));
                                form.appendChild(document.getElementById("cuslname"));
                                form.appendChild(document.getElementById("cusage"));
                                form.appendChild(document.getElementById("no"));
                                form.appendChild(document.getElementById("street"));
                                form.appendChild(document.getElementById("city"));
                                form.appendChild(document.getElementById("cusemail"));
                                form.appendChild(document.getElementById("mobile"));
                                form.appendChild(document.getElementById("land"));
                                form.appendChild(document.getElementById("nic"));
                                form.appendChild(document.getElementById("uname"));
                                form.appendChild(document.getElementById("password"));
                                form.appendChild(document.getElementById("repassword"));

                                document.body.appendChild(form);
                                form.submit();
                            
                            }
                        </script>
                </div>
                <br><br>
                
                <br>
             
        </div>
         </div>
        </div>
        <?php $conn->close(); ?>
    </body>
</html> 