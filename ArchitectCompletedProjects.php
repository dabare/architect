<?php
session_start();
?>
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
            <li><a id="activeEdit" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
            <li><a id="editItem" href="ArchitectEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            <li><a id="editItem" href="ArchitectEmployees.php">Employees</a></li>
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
        </ul>

        <div style="margin-left:15%;padding:1px 16px;height:1000px;"><br><br>



            <table>
                <tr>
                    <th><h1>Industrial</h1></th>
                    <th><h1>Residential</h1></th>
                    <th><h1>Community</h1></th>
                </tr>


                <tr>

                    <?php
                    require_once './db/dbConnection.php';

                    $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det  , project.city AS city , project.progress/100 as prog , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Industrial' and project.progress=100 AND project.architect_id='" . $_SESSION["id"] . "' AND project.status='Active' ORDER BY city ASC;";
                    $result = $conn->query($sql);

                    echo '<td valign="top">';
                    echo '<ul id="projlist">';
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {



                            echo '<li ><a id = "proj" href = "ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["city"] . '<div>' . $row["det"] . '</div><br></a></li>';
                            echo '<li class = "brk"></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</td>';



                    $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det  , project.city AS city , project.progress/100 as prog , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Residential' and project.progress=100 AND project.architect_id='" . $_SESSION["id"] . "' AND project.status='Active' ORDER BY city ASC;";
                    $result = $conn->query($sql);

                    echo '<td valign="top">';
                    echo '<ul id="projlist">';
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {



                            echo '<li ><a id = "proj" href = "ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["city"] . '<div>' . $row["det"] . '</div><br></a></li>';
                            echo '<li class = "brk"></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</td>';


                    $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det  , project.city AS city , project.progress/100 as prog , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Community' and project.progress=100 AND project.architect_id='" . $_SESSION["id"] . "' AND project.status='Active' ORDER BY city ASC;";
                    $result = $conn->query($sql);

                    echo '<td valign="top">';
                    echo '<ul id="projlist">';
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {



                            echo '<li ><a id = "proj" href = "ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["city"] . '<div>' . $row["det"] . '</div><br></a></li>';
                            echo '<li class = "brk"></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</td>';


                    $conn->close();
                    ?>
                </tr>
            </table>

        </div>

    </body>
</html> 