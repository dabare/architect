
<!DOCTYPE html>
<html>
    <head>
        <style>
            .r_bar{
         width: 500px;
         height: 400px;
         margin-left: 500px;
         margin-top: 20px;
         background-color: transparent;
         padding: 6px;                            
        }
       
        </style>
        <title>Employee</title>
        <link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
        <meta charset="utf-8">
    </head>
    <body id="bdy">
        <ul id="navigationbarEdit">
            <li><a id="editItem" href="EmployeeEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="EmployeeSalary.php">Salary</a></li>
            <li><a id="editItem" href="EmployeeAttendance.php">Attendance</a></li>
            <li><a id="activeEdit" href="EmployeeReminders.php">Reminders</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
        </ul>

        <div id="boddy">
            <h3>Reminder</h3>
            <div class="r_bar">
                <iframe src="https://calendar.google.com/calendar/embed?src=chobodi.damsarani%40gmail.com&ctz=Asia/Colombo" style="border: 0" width="500" height="400" frameborder="0" scrolling="no"></iframe>
            </div><br><br>
            View all Notification:
            <button type="button"  >View</button>
            
        </div>

    </body>
</html> 