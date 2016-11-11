<?php
require_once './db/dbConnection.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Customer project details</title>
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
            
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="activeEdit" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>
        </div>

        <div style="margin-left: 300px">
            <h3>Customer Project Details</h3><br><br>
            
            
               <!--Right Column-->
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
			<div class="accordion white"><br>
				<form>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
								
								
                                    Customer ID:<br>
                                    <input type="text" size="15" name="firstname"  disabled>
                                </div>
                                
                            </div>  
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
								
								
                                    Architect ID:<br>
                                    <input type="text" size="15" name="firstname"  disabled>
                                </div>
                                
                            </div> 
                            <br>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
                            		Category:<select name="category">
                                                            <option value="industrial">Industrial</option>
                                                            <option value="residential">Residential</option>
                                                            <option value="community">Community</option>
                            		                 </select>
                                </div>
                            </div>
                            <br>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
									Date:<br>
                                    <input type="date" name="date" size="30">
                                </div>
                            </div>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
									Location:<br>
                                    <select name="location">
                                                            <option value="ampara">Ampara</option>
                                                            <option value="anuradhapura">Anuradhapura</option>
                                                            <option value="badulla">Badulla</option>
                                                            <option value="batticaloa">Batticaloa</option>
                                                            <option value="colombo">Colombo</option>
                                                            <option value="galle">Galle</option>
                                                            <option value="gampaha">Gampaha</option>
                                                            <option value="hambantota">Hambantota</option>
                                                            <option value="jaffna">Jaffna</option>
                                                            <option value="kaluthara">Kaluthara</option>
                                                            <option value="kandy">Kandy</option>
                                                            <option value="kegalle">Kegalle</option>
                                                            <option value="kilinochchi">Kilinochchi</option>
                                                            <option value="kurunegala">Kurunegala</option>
                                                            <option value="mannar">Mannar</option>
                                                            <option value="matale">Matale</option>
                                                            <option value="matara">Matara</option>
                                                            <option value="monaragala">Monaragala</option>
                                                            <option value="mullaitivu">Mullaitivu</option>
                                                            <option value="nuwaraeliya">Nuwara Eliya</option>
                                                            <option value="polonnaruwa">Polonnaruwa</option>
                                                            <option value="puttalam">Puttalam</option>
                                                            <option value="ratnapura">Ratnapura</option>
                                                            <option value="trincomalee">Trincomalee</option>
                                                            <option value="vavuniya">Vavuniya</option>
                                                        </select>
                                </div>
                                
                            </div><br><br>
                            
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
								
								
                                    Description:<br>
                                    <textarea name="description" rows="5" cols="30" placeholder="Description"></textarea>
                                </div>
                                
                            </div>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
								
								
                                    Progress:<br>
                                    <progress value="15" max="100"></progress>
                                </div>
                                
                            </div>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
								
								
                                    Estimated Duration<br>
                                    <input type="text" name="estimated_duration" size="30">
                                </div>
                                
                            </div>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
								
								
                                    Estimated Cost:<br>
                                    <input type="text" name="estimated_cost" size="30">
                                </div>
                                
                            </div>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
								
								
                                    City:<br>
                                    <select name="city">
                                                            <option value="ampara">Ampara</option>
                                                            <option value="anuradhapura">Anuradhapura</option>
                                                            <option value="badulla">Badulla</option>
                                                            <option value="batticaloa">Batticaloa</option>
                                                            <option value="colombo">Colombo</option>
                                                            <option value="galle">Galle</option>
                                                            <option value="gampaha">Gampaha</option>
                                                            <option value="hambantota">Hambantota</option>
                                                            <option value="jaffna">Jaffna</option>
                                                            <option value="kaluthara">Kaluthara</option>
                                                            <option value="kandy">Kandy</option>
                                                            <option value="kegalle">Kegalle</option>
                                                            <option value="kilinochchi">Kilinochchi</option>
                                                            <option value="kurunegala">Kurunegala</option>
                                                            <option value="mannar">Mannar</option>
                                                            <option value="matale">Matale</option>
                                                            <option value="matara">Matara</option>
                                                            <option value="monaragala">Monaragala</option>
                                                            <option value="mullaitivu">Mullaitivu</option>
                                                            <option value="nuwaraeliya">Nuwara Eliya</option>
                                                            <option value="polonnaruwa">Polonnaruwa</option>
                                                            <option value="puttalam">Puttalam</option>
                                                            <option value="ratnapura">Ratnapura</option>
                                                            <option value="trincomalee">Trincomalee</option>
                                                            <option value="vavuniya">Vavuniya</option>
                                                        </select>
                                                        <br><br>
                                                        <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" data-toggle="dropdown"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Save
                                                        </button>

                                                        <!-- <input type="submit" value="Save" style="width: 100px;"><br><br> -->
                                </div><br><br>
                                
                            </div>
                        </form>
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
<?php $conn->close(); ?>
    </body>
</html> 