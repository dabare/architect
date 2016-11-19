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
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 10px">
	<!--The Grid-->
	<div class="row">
        <div class="col m3">

		<!-- left panel -->
            <ul id="navigationbarEdit">
                <li><a id="editItem" href="CustomerNotification.php">Notification</a></li>
                <li><a id="activeEdit" href="CustomerEditProfile.php">Edit Profile</a></li>
                <li><a id="editItem" href="CustomerMyProject.php">My Projects</a></li>
                <li><a id="editItem" href="CustomerMakeAppointments.php">Make Appointment</a></li>
                <li><a id="editItem" href="index.php">Logout</a></li>
            </ul>
        </div>
        <div class="col m6">
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
                                <br><br><br>
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
                            </div>
                            <div class="col m8">
                                <br><br><br>
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
                                    <input type="date" name="created" value="<?php echo $created ?> " disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col m6">
                        <div style="text-align: center;">
                            <br><br>
                            <a  href="CustomerEditProfile.php"><button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Edit Details</button>
                        </div>
                        <div class="row">
                            <div style="text-align: center;">
                                <br><br>
                    <!-- <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" onclick="saveCustomer()"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Save</button> -->
                    
                                <script>
                            // function saveCustomer() {


                            //     var form = document.createElement("form");
                            //     form.setAttribute("method", "post");
                            //     form.setAttribute("hidden", "true");
                            //     form.setAttribute("action", "Projects/SaveCustomers.php");




                                // var cid = document.createElement("input");
                                // cid.setAttribute("type", "hidden");
                                // cid.setAttribute("name", "awid");
                                // cid.setAttribute("value", <?php echo $id ?>);


                                // form.appendChild(cid);



                                // form.appendChild(document.getElementById("cuscat"));
                                // form.appendChild(document.getElementById("custitle"));
                                // form.appendChild(document.getElementById("cusdesc"));



                            //     document.body.appendChild(form);
                            //     form.submit();
                            // }

                            // function deleteAward() {
                            //     if (confirm("Confirm delete Award ") == true) {


                            //         var form = document.createElement("form");
                            //         form.setAttribute("method", "post");
                            //         form.setAttribute("action", "Projects/DeleteAwards.php");




                            //         var aid = document.createElement("input");
                            //         aid.setAttribute("type", "hidden");
                            //         aid.setAttribute("name", "awid");
                            //         aid.setAttribute("value", <?php echo $id ?>);


                            //         form.appendChild(aid);




                            //         document.body.appendChild(form);
                            //         form.submit();
                            //     } else {

                            //     }

                            // }
                                </script>
                        <!-- <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" onclick="deleteAward()"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Remove</button> -->
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m3">
            <button class="btn btn-primary medium theme-l1 left-align" style="width:600px" type="button"><!-- <i class="fa fa-circle-o-notch fa-fw margin-right"></i> --><a href="">
                <?php 
                 require_once '../db/dbconnection.php';
                 $query="SELECT * from project WHERE customer_id='".$record["id"]."'";
                 $res=mysqli_query($conn,$query);
                 
                 while($record=mysqli_fetch_array($res)){
                     echo"<li><a id='editItem' href='CustomersEditProfile1.php'>".$record["id"]."</a></li>";
                     echo"</br>";
                    
                    
                 }
                
                ?></a></button>
        </div>
    </div>
</div>
    <?php $conn->close(); ?>
</body>
</html> 