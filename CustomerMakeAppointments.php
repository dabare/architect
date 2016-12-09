<?php
require_once './db/dbConnection.php';
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
            <li><a id="editItem" href="CustomerEditProfile1.php">My Profile</a></li>
            
            <li><a id="activeEdit" href="CustomerMakeAppointments.php">Consultants</a></li>
            <li><a id="editItem" href="logout.php">Logout</a></li>
            </ul>
                
           <div style="margin-left:20%;padding:1px 16px;height:800px;width:400px;">
               
            <h3>Select Your Consultant</h3>
            <br><br>
                <h3>Registered Architects</h3>
                <div id="border"><br><br>
                    <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 20vh;width: 300px;">
                        <ul style="list-style: none">
                    
                            <?php
                                $sql = "SELECT * FROM consultants WHERE status='active' and category='Architect';";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li><a id="editItem" href="CustomerMakeAppointments1.php?id=' . $row["id"] . '">' . $row["fname"] . ''. " " .'' . $row["lname"] . '</a></li><br>';
                                    }
                                }
                            ?>
                    
                        </ul>                      
                    </div><br>
                </div>
                <h3>Registered Engineers</h3>
                <div id="border"><br><br>
                    <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 20vh;width: 300px;">
                        <ul style="list-style: none">
                    
                            <?php
                                $sql = "SELECT * FROM consultants WHERE status='active' and category='Consultant' or category='Structural Consultant' or category='Services Consultant';";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li><a id="editItem" href="CustomerMakeAppointments1.php.php?id=' . $row["id"] . '">' . $row["fname"] . ''. " " .'' . $row["lname"] . '</a></li><br>';
                                    }
                                }
                            ?>
                    
                        </ul>                      
                    </div><br>
                </div>
                <h3>Registered Design Developers</h3>
                <div id="border"><br><br>
                    <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 20vh;width: 300px;">
                        <ul style="list-style: none">
                    
                            <?php
                                $sql = "SELECT * FROM consultants WHERE status='active' and category='Design Developer';";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li><a id="editItem" href="CustomerMakeAppointments1.php.php?id=' . $row["id"] . '">' . $row["fname"] . ''. " " .'' . $row["lname"] . '</a></li><br>';
                                    }
                                }
                            ?>
                    
                        </ul>                      
                    </div><br>
                </div>
                <h3>Registered Draftman</h3>
                <div id="border"><br><br>
                    <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 20vh;width: 300px;">
                        <ul style="list-style: none">
                    
                            <?php
                                $sql = "SELECT * FROM consultants WHERE status='active' and category='Draftman';";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li><a id="editItem" href="ArchitectConsultants1.php?id=' . $row["id"] . '">' . $row["fname"] . ''. " " .'' . $row["lname"] . '</a></li><br>';
                                    }
                                }
                            ?>
                    
                        </ul>                      
                    </div><br>
                </div>
            <div>
            <div style="margin-left: 600px;margin-top: -1000px;">
                <div id="border"><br><br>
                    <div style="margin-left: 10px;">
                        <form>
                            <div style="text-align: left;margin-right: 50px;">
                                Contact No:<br>
                                <input type="text" name="date" size="20" >
                            </div>
                            <br>
                            Email:
                            <br>
                                <input type="text" name="date" size="25">
                            <div><br>
                                Address:<br>
                                <textarea required="true" name="desc" rows="2" cols="50" style="position: left"></textarea>
                            </div><br><br>
                            <div>
                                Description:<br>
                                <textarea required="true" name="desc" rows="4" cols="50" style="position: left"></textarea>
                            </div><br><br>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
                </div>
        <?php mysqli_close($conn); ?>
    </body>
</html> 