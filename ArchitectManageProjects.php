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

		<li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Logo</a></li>
		
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
            <li><a id="activeEdit" href="ArchitectManageProjects.php">Gallery</a></li>
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
            <div style="text-align: center">
                <h1>Gallery</h1>
                
                <div style="text-align: right;padding-right: 5%;">
                    <a  href="Projects/NewGalleryProject.php"><button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Add New
                </button>
                </div>
                <br><br>
                <div id="border">
                    
                    <form>
                        <fieldset style="background-color: transparent;width: 200px;height: 400px;margin-left: 50px;">
                            <legend><h3>Industrial</h3></legend><br>
                            <ul style="list-style: outside">
                                <?php
                                require_once './db/dbConnection.php';

                                $sql1 = "SELECT * FROM g_project WHERE category = 'Industrial' AND status='Active' ORDER BY title ASC;";
                                $result1 = $conn->query($sql1);

                                if ($result1->num_rows > 0) {
                                // output data of each row
                                    while ($row = $result1->fetch_assoc()) {
                                        echo '<li><a id="editItem" href="ArchitectManageProjects1.php?id=' . $row["id"] . '">' . $row["title"] . '</a></li><br>';
                                    }
                                }
                                ?>
                            </ul>
                        </fieldset><br>
                    </form>
                </div>
                <div id="border">
                    <form>
                    <fieldset style="background-color: transparent;width: 200px;height: 400px;margin-left: 300px;margin-top: -430px;">
                        <legend><h3>Residential</h3></legend><br>
                        <ul style="list-style: outside">
                            <?php
                            $sql2 = "SELECT * FROM g_project WHERE category = 'Residential' AND status='Active' ORDER BY title ASC;";
                            $result2 = $conn->query($sql2);

                            if ($result2->num_rows > 0) {
                                // output data of each row
                                while ($row = $result2->fetch_assoc()) {
                                    echo '<li><a id="editItem" href="ArchitectManageProjects1.php?id=' . $row["id"] . '">' . $row["title"] . '</a></li><br>';
                                }
                            }
                            ?>
                        </ul>
                    </fieldset><br>
                    </form> 
                </div>
                
                <div id="border">
                    <form>
                    <fieldset style="background-color: transparent;width: 200px;height: 400px;margin-left: 600px;margin-top: -430px;">
                        <legend><h3>Community</h3></legend><br>
                        <ul style="list-style: outside">
                            <?php
                            $sql = "SELECT * FROM g_project WHERE category = 'Community' AND status='Active' ORDER BY title ASC;";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '<li><a id="editItem" href="ArchitectManageProjects1.php?id=' . $row["id"] . '">' . $row["title"] . '</a></li><br>';
                                }
                            }
                            ?>
                        </ul>
                    </fieldset><br>
                </form>
                </div>
                
                
            </div>
        </div>
                </div>
        </div>
        <?php mysqli_close($conn); ?>
    </body>
</html> 