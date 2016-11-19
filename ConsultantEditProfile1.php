<?php

session_start();

require_once './db/dbConnection.php';

$sql = "SELECT * FROM consultants WHERE id='" . $_SESSION['id'] . "';";
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
        $status = $row["status"];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Consultant</title>
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

		<li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Consultant</a></li>
		
	</ul>
</div>

<!--Page Container-->
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 10px">
	<!--The Grid-->
	<div class="row">

		<!-- left panel -->
                <ul id="navigationbarEdit">
                <li><a id="activeEdit" href="ConsultantEditProfile1.php">Edit Profile</a></li>
                <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>
        </div>
        <div class="col m10">
        <div style="margin-left: 300px">
            <h3>Consultant Profile</h3><br><br>
            
            <form>
               <!--Right Column-->
            <div class="row">
                <div class="col m12">
			     <!--Profile-->
			        <div class="card-2 round white">
                        <div class="col m4">
				            <div class="container">
					           <h4>Profile</h4>
					           <p><img src="profcss/prof.jpg" class="circle" style="height:106px;width:106px" alt="Profile"></p>
					        </div>
				        </div>
			        </div>
			        <br><br>
                    <div class="col m8">        
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
                        <div style="text-align: left;">
                            <div style="display:inline-block;">
                                Age:<br><input type="text" name="age" size="4" value="<?php echo $age ?>" disabled>
                            </div>
                            <div style="display:inline-block;">
                                NIC:<br><input type="text" name="nic" size="15" value="<?php echo $nic ?> " disabled>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
               <div class="row">
                <div class="col m12">
                    <div class="col m4">
                        <br><br>
                        Status:
                        <select id="status" name="state">
                                
                                <option<?php
                                if ($status == "active") {
                                    echo ' selected';
                                }
                                ?> value="active">Active</option>
                                <option<?php
                                if ($status == "inactive") {
                                    echo ' selected';
                                }
                                ?> value="inactive">Inactive</option>
                            </select>
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
                        <br><br>
                        Google Location:
                        <br>
                        <input type="text" name="location" size="40">
                        <br><br>
                        <div >
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5643649597737!2d79.89346104990712!3d7.060361918623994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f737b5b05a09%3A0xd4ef00d25a3b354a!2sK+Zone+Ja-Ela!5e0!3m2!1sen!2slk!4v1471279498706" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                        </div>
                        <br><br>
                    </div>
                <div class="col m8">
                            <br>
                            Email:<br>
                            <div style="text-align: left;">
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
                            Account created date:<br>
                            <div style="text-align: left;">
                                <input type="date" name="created" value="<?php echo $date ?> " disabled>
                            </div>
                    </div><br><br>
                    <div class="col m12">
                        <div style="text-align: center;">
                            <a href="ConsultantEditProfile.php"><button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Reset all Fields
                            </button><a>
                        </div>
                    </div>
            </form>
        </div>

    </body>
</html> 