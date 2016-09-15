
<!DOCTYPE html>
<html>
    <head>
        <title>Employee</title>

        <link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
        <meta charset="utf-8">


    </head>
    <body id="bdy">
        <ul id="navigationbarEdit">
            <li><a id="activeEdit" href="EmployeeEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="EmployeeSalary.php">Salary</a></li>
            <li><a id="editItem" href="EmployeeAttendance.php">Attendance</a></li>
            <li><a id="editItem" href="EmployeeReminders.php">Reminders</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
        </ul>

        <div id="boddy">

            <br>
            <form>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        First name:<br>
                        <input type="text" size="15" name="firstname">
                    </div>
                    <div style="display:inline-block;">
                        Middle name:<br>
                        <input type="text" size="15" name="middlename">
                    </div>
                    <div style="display:inline-block;">
                        Last name:<br>
                        <input type="text" size="15" name="lastname">
                    </div>
                </div>  
                <br>
                Select Photo:
                <input id="files" type="file" name="pic" accept="image/*" onchange="readURL(this)">
                <img  src="images/customer.jpeg" alt="your image"  height="200" width="180" style="position: absolute"/>
                <br><br>
                Age:<input type="text" name="age" size="4">
                <br><br>
                Address:<br>
                <div style=" padding-left: 2em;">
                    No:
                    <br>
                    <input type="text" size="10" name="no">
                    <br>
                    Street:
                    <br>
                    <input type="text" name="street">
                    <br>
                    City:
                    <br>
                    <input type="text" name="city">
                </div>
                <br>
                Email:
                <br>
                <input type="text" name="email" size="35">
                <br><br>


                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        Mobile No:
                        <br>
                        <input type="text" name="mobile" size="10">
                    </div>
                    <div style="display:inline-block;">
                        Land No:
                        <br>
                        <input type="text" name="land" size="10">
                    </div>
                </div>  

                <br>
                NIC:
                <br>
                <input type="text" name="nic" size="15">

                <br><br>
                Reg. No.:
                <br>
                <input type="text" name="reg" size="15">

                <br><br>
                Account created date:
                <br>
                <input type="date" name="date" disabled>

                <br><br>
                User Name:
                <br>
                <input type="text" name="uname" size="15">
                <br><br>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        New Password:
                        <br>
                        <input type="password" name="pass" size="25">
                    </div>
                    <div style="display:inline-block;">
                        Retype New Password:
                        <br>
                        <input type="password" name="retypepass" size="25">
                    </div>
                </div>  
                <br>
                <div style="text-align: center;">
                    <button type="button"  style="width: 200px;height: 30px;">Reset All Fields</button>
                    <button type="button"  style="width: 200px;height: 30px;">Save</button>.
                </div>
                <br><br>
            </form>
        </div>

    </body>
</html> 