
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
            <li><a id="activeEdit" href="EmployeeSalary.php">Salary</a></li>
            <li><a id="editItem" href="EmployeeAttendance.php">Attendance</a></li>
            <li><a id="editItem" href="EmployeeReminders.php">Reminders</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
        </ul><br>

        <div id="boddy">
            <h3>Salary</h3><br><br>
            <div style="text-align: center">
                <table>
                    <tr>
                        <th>Allowance Type</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <td>Basic Salary</td>
                        <td>Rs.30,000</td>
                    </tr>
                    <tr>
                        <td>Attendance allowances</td>
                        <td>Rs.10,000</td>
                    </tr>
                    <tr>
                        <td>Meal and clothing allowances</td>
                        <td>Rs.5,000</td>
                    </tr>
                    <tr>
                        <td>Accommodation allowances</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Traveling allowances</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <br><br><br><br><br>


            <h3>History</h3><br><br>
                           <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 300px;">
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                        <tr>
                            <td>2016 Aug 20</td>
                            <td>Description</td>
                            <td>Rs.30,000</td>
                        </tr>
                    </table>
                </div>
                <script>

                    var myDiv = document.getElementById("saltbl");
                    myDiv.scrollTop = myDiv.scrollHeight;</script>

            <br><br><br><br><br>




            <!--            <div style="text-align: left">
                            Show Total Salary:
                            <button type="button"  style="width: 80px;height: 30px;">Show</button>
                            <textarea rows="10" cols="50" style="position: absolute"></textarea>
                        </div>-->

            </body>
            </html> 