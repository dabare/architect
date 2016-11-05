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
            <li><a id="editItem" href="CustomerEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="CustomerMyProject.php">My Projects</a></li>
            <li><a id="activeEdit" href="CustomerMakeAppointments.php">Make Appointment</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
            </ul>
           <div id="boddy">
               <div style="margin-left:100px">
                <form>
                    <fieldset style="background-color: transparent">
                        <legend><h3>Select consultant</h3></legend>
                        <p>
                            <label for = "1">Structural Engineer</label>
                            <input type = "checkbox" id = "1" value = "Durekanda Bungalow" /><br><br>
                            <label for = "2">Quantity Surveyor</lable>
                            <input type = "checkbox" id = "2" value = "Staff Quarters" /><br><br>
                            <label for = "3">M&E Engineer</lable>
                            <input type = "checkbox" id = "3" value = "DPMC Rathnapura" /><br><br>
                            <label for = "4">Consultant 1</label>
                            <input type = "checkbox" id = "4" value = "HP Showroom" /><br><br>
                            <label for = "5">Consultant 2</label>
                            <input type = "checkbox" id = "5" value = "Singhe Hospital" /><br><br>
                            <label for = "6">Consultant 3</label>
                            <input type = "checkbox" id = "6" value = "YMBA" /><br><br>
                            <label for = "7">Consultant 4</label>
                            <input type = "checkbox" id = "7" value = "Kolonnawa Temple" /><br><br>
                            
                            <div style="text-align: center;">
                                <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Appointment
                </button>
                                <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Cancel
                </button>
                                
                             </div>
                        </p>
                    </fieldset><br><br><br><br>
                 </form>
        </div>
            </div>
                </div>
    </body>
</html> 