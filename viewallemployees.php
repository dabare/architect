<html>
    <head>
        <style>
            #header{
                background-color: #1a1aff ;
                color: white;
                border-radius: 5px;
            }
            #header h1{
                margin-left: 10px;
            }
            div.img {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
            }

            div.img:hover {
                border: 1px solid #777;
            }

            div.img img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: left;
            }
            #link{
                margin-top: 10px;
                background-color:  #0000b3;
                font-size: 14px;
                padding-left: 10px;
                padding-right: 10px;
                text-align: center;
                text-decoration: none;
                padding-bottom: 3px;
                color: white;
                margin-left: 10px;
                margin-right: 10px;
                border-radius: 5px;

            }
            #link:hover{
                background-color: #8080ff ;
            }


        </style>
    </head>
    <body>
        <div id="header">
            <h1>All Employees</h1>
        </div>
    <center>
        <?php
        require_once 'db/dbConnection.php';

        $sql = "SELECT * FROM employee";

        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<center><div class=img>
  		<a href=viewemployee.php?empid=" . $row['employee_id'] . ">
    	<img src=" . $row['employee_image'] . " alt=noimage width=320 height=200>
  		</a>
  		<div class=desc>NAME : " . $row['employee_name'] . "</div>
  		<div class=desc>ADDRESS : " . $row['employee_address'] . "</div>
  		<div class=desc>CONTACT : " . $row['employee_contact'] . "</div>
  		<div class=desc><a id=link href=updateemployeeform.php?id=" . $row['employee_id'] . ">update employee</a></div>
  		<div class=desc><a id=link href=removeemployee.php?empid=" . $row['employee_id'] . ">remove employee</a></div>
  		<div class=desc><a id=link href=employeesalaryform.php?empid=" . $row['employee_id'] . "&empname=" . $row['employee_name'] . ">employee salary</a></div>
  		<div class=desc><a id=link  href=employeeattendanceform.php?empid=" . $row['employee_id'] . "&empname=" . $row['employee_name'] . ">attendence</a></div>
		</div></center>";
            }
        } else {
            echo '<script>
			alert("No employee found");
			window.location ="newemployeeform.php";
		</script>';
        }

        mysqli_close($conn);
        ?>
        <center>
            <a id="link" href="index.php">Home</a>
        </center>

    </body>
</html>