
<!DOCTYPE html>
<html>
    <head>
        <title>architect</title>

        <link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
        <meta charset="utf-8">

    </head>
    <body id="bdy">
        <ul id="navigationbarEdit">
            <li><a id="editItem" href="ArchitectNotification.php">Notification</a></li>
            <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
            <li><a id="editItem" href="ArchitectManageProjects.php">Gallery</a></li>
            <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
            <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
            <li><a id="editItem" href="ArchitectEditProfile.php">Edit Profile</a></li>
            <li><a id="activeEdit" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            <li><a id="editItem" href="ArchitectEmployees.php">Employees</a></li>
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
        </ul>

        <div style="margin-left:25%;padding:1px 16px;height:1000px;">
            <h3>Appointments</h3>
                <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 300px;width: 200px;">
                    <ul style="list-style: none">
                    <li>
                        <a href="#" style="text-decoration: none;">Appointment 1</a>
                    </li><br><br>
                    <li><a href="#" style="text-decoration: none;">Appointment 2 </a></li><br><br>
                    <li><a href="#" style="text-decoration: none;">Appointment 3</a><li><br><br>
                    <li><a href="#" style="text-decoration: none;">Appointment 4</a><li><br><br>
                    <li><a href="#" style="text-decoration: none;">Appointment 5</a><li><br><br>
                    
                </ul>                      
                </div>
            <div style="margin-left: 400px;margin-top: -300px;">
                <div id="border"><br><br>
                    <div style="margin-left: 10px;">
                        <form>
                            <div style="text-align: right;margin-right: 50px;">
                                Date :
                                <input type="text" name="date" size="15">
                            </div>
                            <div>
                                By : Client 1 
                            </div><br><br>
                            <div>
                                Notice:<br>
                                <textarea required="true" name="desc" rows="4" cols="50" style="position: left"></textarea>
                            </div><br><br>
                            <div>
                                Reply:<br>
                                <textarea required="true" name="desc" rows="4" cols="50" style="position: left"></textarea>
                            </div><br><br>
                            <div style="text-align: right;">
                                <button type="button"  style="width: 100px;height: 30px;">Ignore</button>
                                <button type="button"  style="width: 100px;height: 30px;">Save</button>
                            </div><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html> 