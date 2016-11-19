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
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 10px">
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
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>


            <div style="margin-left:300px">

            <h3>Employee Profile</h3>
            <br>
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
			<br>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        First name:<br>
                        <input type="text" size="15" name="firstname" disabled>
                    </div>
                    <div style="display:inline-block;">
                        Middle name:<br>
                        <input type="text" size="15" name="middlename" disabled>
                    </div>
                    <div style="display:inline-block;">
                        Last name:<br>
                        <input type="text" size="15" name="lastname" disabled>
                    </div>
                </div>  
                <br>
                
                Age:<input type="text" name="age" size="4" disabled>
                <br><br>
                Address:<br>
                <div style=" padding-left: 2em;">
                    No:
                    <br>
                    <input type="text" size="10" name="no" disabled>
                    <br>
                    Street:
                    <br>
                    <input type="text" name="street" disabled>
                    <br>
                    City:
                    <br>
                    <input type="text" name="city" disabled>
                </div>
                <br>
                Email:
                <br>
                <input type="text" name="email" size="35" disabled>
                <br><br>


                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        Mobile No:
                        <br>
                        <input type="text" name="mobile" size="10" disabled>
                    </div>
                    <div style="display:inline-block;">
                        Land No:
                        <br>
                        <input type="text" name="land" size="10" disabled>
                    </div>
                </div>  

                <br>
                NIC:
                <br>
                <input type="text" name="nic" size="15" disabled>

                <br><br>
                Reg. No.:
                <br>
                <input type="text" name="reg" size="15" disabled>

                <br><br>
                Account created date:
                <br>
                <input type="date" name="date" disabled>

                <br><br>
                User Name:
                <br>
                <input type="text" name="uname" size="15" disabled>
                <br><br>
                Status:
                <select name="cars">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select><br><br><br>

                Mark Employee Attendance:
                <select name="cars">
                    <option value="active">Present</option>
                    <option value="inactive">Absent</option>
                </select>
                <br><br><br><br>
                Basic Salary:
                <input type="text" size="15" name="salary" value="RS: 1000"><br><br><br>
                Other Allowances:
                <div style=" padding-left: 2em;"><br><br>
                    <label for = "1">Attendance allowances</label>
                    <input type="text" size="15" name="atten" value="RS: 1000"/><br><br>
                    <label for = "1">Meal and clothing allowances</label>
                    <input type="text" size="15" name="meal" value="RS: 1000"/><br><br>
                    <label for = "1">Accommodation allowances</label>
                    <input type="text" size="15" name="accom" value="RS: 1000"/><br><br>
                    <label for = "1">Benefit allowances</label>
                    <input type="text" size="15" name="bene" value="RS: 1000"/><br><br>
                    <label for = "1">Traveling allowances</label>
                    <input type="text" size="15" name="trav" value="RS: 1000"/><br><br>
                    <br>
                </div>
                <h3>Vges History</h3>
                <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 300px;">
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> <input type="date" size="15" name="atten" value="2016 Aug 20"/><br><br></td>
                            <td> <input type="text" size="15" name="atten" value="Description"/><br><br></td>
                            <td> <input type="text" size="15" name="atten" value="RS: 1000"/><br><br></td>
                            <td><button type="button" style="width: 50px">Save</button></td>
                        </tr>
                    </table>
                </div>
                <script>

                    var myDiv = document.getElementById("saltbl");
                    myDiv.scrollTop = myDiv.scrollHeight;</script>

                <br><br><br>
                <h3>Attendance</h3>

                <h3>History</h3>
                <div id="atntbl" style="text-align: center ;  overflow: scroll ; height: 300px;">
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>In</th>
                            <th>Out</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr><tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr><tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr><tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr><tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr><tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                            <td><button type="button" style="width: 50px">Edit</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> <input type="date" size="15" name="atten" value="2016 Aug 20"/><br><br></td>
                            <td> <input type="text" size="15" name="atten" value="8.00 am"/><br><br></td>
                            <td> <input type="text" size="15" name="atten" value="5.00 pm"/><br><br></td>
                            <td><button type="button" style="width: 50px">Save</button></td>
                        </tr>
                    </table>
                </div>
                <script>

                    var myDiv = document.getElementById("atntbl");
                    myDiv.scrollTop = myDiv.scrollHeight;</script>

                View all absent days from :
                <input type="date" name="datefrom">
                to:
                <input type="date" name="dateto">
                <button type="button"  style="width: 80px;height: 30px;">View</button>
                <input type="text" name="absdays">
                <br><br> 
                Your attendance chart in:
                <input type="text" name="absdays" value="2016">
                <button type="button"  style="width: 80px;height: 30px;">View</button><br>
                <img  src="images/atten.jpg"  style="width:600px;height:200px;margin: 40px 0px 30px 200px;">
                <br><br>
                Add note about attendance:
                <button type="button"  style="width: 80px;height: 30px;">Submit</button>    
                <textarea rows="10" cols="50" style="position: absolute"></textarea><br>

                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br>

                </body>
                </html> 