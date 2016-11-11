<?php
require_once './db/dbConnection.php';

$id = $_GET['id'];


$sql = "SELECT * FROM award WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $category = $row["category"];
        $description = $row["description"];
        $title = $row["title"];
    }
}
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
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 0px">
	<!--The Grid-->
	<div class="row">

		<!-- left panel -->
                <ul id="navigationbarEdit">
            <li><a id="editItem" href="ArchitectNotification.php">Notification</a></li>
            <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
            <li><a id="editItem" href="ArchitectManageProjects.php">Gallery</a></li>
            <li><a id="activeEdit" href="ArchitectManageAwards.php">Manage Awards</a></li>
            <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
            
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>
             <br><br><br>              
            <div style="text-align: center;">
                    
                    <h3>Edit Awards:</h3><br><br>
                    Select:
                    <select  id="awcat" name="category" >
                                <option<?php
                                if ($category == "Awards") {
                                    echo ' selected';
                                }
                                ?> value="Awards">Awards</option>
                                <option<?php
                                if ($category == "Academic Qualifications") {
                                    echo ' selected';
                                }
                                ?> value="Academic Qualifications">Academic Qualifications</option>
                                
                            </select>
                    <br><br>
                    Title:
                    <textarea id="awtitle" rows="1" name="title" cols="40"><?php echo $title; ?></textarea><br><br>
                    
                    Description:
                    <textarea id="awdesc" rows="5" name="desc" cols="50"><?php echo $description; ?></textarea>
                    <br><br>
                    <div style="text-align: center;">
                        <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" onclick="saveAward()"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Save</button>
                        
                        <script>
                            function saveAward() {


                                var form = document.createElement("form");
                                form.setAttribute("method", "post");
                                form.setAttribute("hidden", "true");
                                form.setAttribute("action", "Projects/SaveAwards.php");




                                var aid = document.createElement("input");
                                aid.setAttribute("type", "hidden");
                                aid.setAttribute("name", "awid");
                                aid.setAttribute("value", <?php echo $id ?>);


                                form.appendChild(aid);



                                form.appendChild(document.getElementById("awcat"));
                                form.appendChild(document.getElementById("awtitle"));
                                form.appendChild(document.getElementById("awdesc"));



                                document.body.appendChild(form);
                                form.submit();
                            }

                            function deleteAward() {
                                if (confirm("Confirm delete Award ") == true) {


                                    var form = document.createElement("form");
                                    form.setAttribute("method", "post");
                                    form.setAttribute("action", "Projects/DeleteAwards.php");




                                    var aid = document.createElement("input");
                                    aid.setAttribute("type", "hidden");
                                    aid.setAttribute("name", "awid");
                                    aid.setAttribute("value", <?php echo $id ?>);


                                    form.appendChild(aid);




                                    document.body.appendChild(form);
                                    form.submit();
                                } else {

                                }

                            }
                        </script>
                        <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" onclick="deleteAward()"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Remove</button>
                    </div>
    </body>
</html>