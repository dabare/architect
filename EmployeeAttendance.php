
<!DOCTYPE html>
<html>
    <head>
        <title>Employee</title>

        <link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
        <meta charset="utf-8">


    </head>
    <body id="bdy">
        <ul id="navigationbarEdit">
            <li><a id="editItem" href="EmployeeEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="EmployeeSalary.php">Salary</a></li>
            <li><a id="activeEdit" href="EmployeeAttendance.php">Attendance</a></li>
            <li><a id="editItem" href="EmployeeReminders.php">Reminders</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
        </ul><br>

        <div id="boddy">
        
         <h3>History</h3>
                <div id="atntbl" style="text-align: center ;  overflow: scroll ; height: 300px;">
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>In</th>
                            <th>Out</th>
                        </tr>
                       
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>8.00 am</td>
                            <td>5.00 pm</td>
                        </tr>
                    </table>
                </div>
                <script>

                    var myDiv = document.getElementById("atntbl");
                    myDiv.scrollTop = myDiv.scrollHeight;</script>

            
                <br><br><br><br>
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
            
        </div>

    </body>
</html> 