
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
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="activeEdit" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            <li><a id="editItem" href="ArchitectEmployees.php">Employees</a></li>
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
        </ul>



        <div id="boddy">
            <h3>Customer Profile</h3><br><br>

            <form>
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
                Select Photo:
                <input id="files" type="file" name="pic" accept="image/*" onchange="readURL(this)" disabled>
                <img  src="images/customer.jpeg" alt="your image"  height="200" width="180" style="position: absolute" disabled/>
                <br><br>
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
                </select>
                <br><br>
                
                <input type="submit" value="Save" style="width: 100px;">
            </form><br><br><br>
        </div>

    </body>
</html> 