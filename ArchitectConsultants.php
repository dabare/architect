<?php
require_once './db/dbConnection.php';
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
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="activeEdit" href="ArchitectConsultants.php">Consultants</a></li>
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="logout.php">Logout</a></li>

            </ul>
        <h2><center>Consultants</center></h2>
        
        <div style="margin-left:25%;padding:1px 16px;height:800px;width:400px;">
                <h3>Registered</h3>
                <div id="border"><br><br>
                <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 60vh;width: 300px;">
                    <ul style="list-style: none">
                    
                            <?php
                                $sql = "SELECT * FROM consultants WHERE status='active';";
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
            </div>
        <div style="margin-left:75%;margin-top:-800px;padding:1px 16px;height:800px;width:400px;">
                <h3>Pending</h3>
                <div id="border"><br><br>
                <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 60vh;width: 300px;">
                    <ul style="list-style: none">
                    
                            <?php
                                $sql = "SELECT * FROM consultants WHERE status ='inactive';";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li><a id="editItem" href="ArchitectConsultants2.php?id=' . $row["id"] . '">' . $row["fname"] . ''." ".'' . $row["lname"] . '</a></li><br>';
                                    }
                                }
                            ?>
                    
                    </ul>                      
                </div><br>
            </div>
            </div>
        </div>
        </div>
<?php mysqli_close($conn); ?>
    </body>
</html> 