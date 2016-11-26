<?php
session_start();
require_once './db/dbConnection.php';


$id = $_SESSION['id'];

$sql = "SELECT * FROM customer WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $cusid = $row["id"];
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
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 10px">
	<!--The Grid-->
	<div class="row">

		<!-- left panel -->
                <ul id="navigationbarEdit">
            <li><a id="editItem" href="CustomerNotification.php">Notification</a></li>
            <li><a id="activeEdit" href="CustomerEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="CustomerMyProject.php">My Projects</a></li>
            <li><a id="editItem" href="CustomerMakeAppointments.php">Make Appointment</a></li>
            <li><a id="editItem" href="logout.php">Logout</a></li>
            </ul>
        <div style="margin-left: 300px">
            <h3>Customer Profile</h3><br><br>
            
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
                        <textarea id="cfname" rows="1" cols="10" name="firstname" ><?php echo $fname ?></textarea>
                    </div>
                    <div style="display:inline-block;">
                        Middle name:<br>
                        <textarea id="cmname" rows="1" cols="10" name="middlename" ><?php echo $mname ?></textarea>
                    </div>
                    <div style="display:inline-block;">
                        Last name:<br>
                        <textarea id="clname" rows="1" cols="10" name="lastname" ><?php echo $lname ?></textarea>
                    </div>
                </div>  
                <br>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                    Age:<br><textarea id="cage" rows="1" cols="10" name="age" ><?php echo $age ?></textarea>
                    </div>
                    <div style="display:inline-block;">
                     NIC:<br><textarea id="cnic" rows="1" cols="10" name="nic" ><?php echo $nic ?></textarea>
                     </div>
                 </div>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col m12">
                        <div class="col m4">
                        <br><br><br>
                        Address:<br>
                        <div style=" padding-left: 2em;">
                        No:
                        <br>
                        <textarea id="cno" rows="1" cols="5" name="no" ><?php echo $add_no ?></textarea>
                        <br>
                        Street:
                        <br>
                        <textarea id="cstreet" rows="1" cols="15" name="street" ><?php echo $add_street ?></textarea>
                        <br>
                        City:
                        <br>
                        <textarea id="ccity" rows="1" cols="15" name="city" ><?php echo $add_city ?></textarea>
                        </div>
                        </div>
                        <div class="col m8">
                        <br><br><br>
                        Email:<br>
                        <div style="text-align: left;">
                        <textarea id="cemail" rows="1" cols="20" name="email"><?php echo $email ?></textarea>
                        <br><br>
                        </div>
                        <div style="text-align: left;">
                        <div style="display:inline-block;">
                        Mobile No:
                        <br>
                        <textarea id="cmobile" rows="1" cols="10" name="mobile"><?php echo $mobile_no?></textarea>
                        </div>
                        <div style="display:inline-block;">
                        Land No:
                        <br>
                        <textarea id="cland" rows="1" cols="10" name="land"><?php echo $land_no?></textarea>
                        </div>
                        </div>
                        Account created date:<br>
                        <div style="text-align: left;">
                            <input type="date" name="created" value="<?php echo $created ?> " disabled="">  


                        </div>
                    </div>
                </div>
                </div>
                
            </form>
            <div class="row">
                <div class="col m6">
                <div style="text-align: center;">
                    <br>
                    <br>
                    <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" onclick="saveCustomer()" name="sav"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Save</button>
                    
                    <script>
                            function saveCustomer() {


                                var form = document.createElement("form");
                                form.setAttribute("method", "post");
                                form.setAttribute("hidden", "true");
                                form.setAttribute("action", "Projects/SaveCustomers.php");




                                 var cid = document.createElement("input");
                                 cid.setAttribute("type", "hidden");
                                 cid.setAttribute("name", "cusid");
                                 cid.setAttribute("value", <?php echo $cusid ?>);


                                 form.appendChild(cid);



                                 form.appendChild(document.getElementById("cfname"));
                                 form.appendChild(document.getElementById("cmname"));
                                 form.appendChild(document.getElementById("clname"));
                                 form.appendChild(document.getElementById("cage"));
                                 form.appendChild(document.getElementById("cnic"));
                                 form.appendChild(document.getElementById("cno"));
                                 form.appendChild(document.getElementById("cstreet"));
                                 form.appendChild(document.getElementById("ccity"));
                                 form.appendChild(document.getElementById("cemail"));
                                 form.appendChild(document.getElementById("cmobile"));
                                 form.appendChild(document.getElementById("cland"));
                                 
                                document.body.appendChild(form);
                                form.submit();
                            }

                           
                        </script>
                        <!-- <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" onclick="deleteAward()"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Remove</button> -->
                    </div>
                </div>
                </div>
                <br><br>
        </div>
         </div>
        </div>
    </div>
        <?php $conn->close(); ?>
    </body>
</html> 