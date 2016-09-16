
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>architect</title>

        <link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
        <meta charset="utf-8">

    </head>
    <body id="bdy">
        <ul id="navigationbarEdit">
            <li><a id="editItem" href="ArchitectEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
            <li><a id="activeEdit" href="ArchitectManageProjects.php">Manage Projects</a></li>
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
            <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            <li><a id="editItem" href="ArchitectEmployees.php">Employees</a></li>
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
        </ul>


        <div class="sidebar">
            <div style="text-align: center">
                <h1>Gallery</h1>

                <div style="text-align: right;padding-right: 5%;">
                    <a  href="Projects/NewGalleryProject.php"><button type="button"  style="width: 150px;height: 30px;">Add New</button></a>
                </div>
                <br><br>
                <fieldset style="background-color: transparent;width: 200px;height: 400px;margin-left: 100px;">
                    <legend><h3>Industrial</h3></legend>
                    <ul style="list-style: outside">
                        <?php
                        require_once './db/dbConnection.php';

                        $sql = "SELECT * FROM g_project WHERE category = 'Industrial' AND status='Active' ORDER BY title ASC;";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '<li><a id="editItem" href="ArchitectManageProjects1.php?id=' . $row["id"] . '">' . $row["title"] . '</a></li><br>';
                            }
                        }
                        ?>
                    </ul>
                </fieldset><br><br><br>
                </form>
                <form>
                    <fieldset style="background-color: transparent;width: 200px;height: 400px;margin-left: 450px;margin-top: -480px;">
                        <legend><h3>Residential</h3></legend>
                        <ul style="list-style: outside">
                            <?php
                            $sql = "SELECT * FROM g_project WHERE category = 'Residential' AND status='Active' ORDER BY title ASC;";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '<li><a id="editItem" href="ArchitectManageProjects1.php?id=' . $row["id"] . '">' . $row["title"] . '</a></li><br>';
                                }
                            }
                            ?>
                        </ul>
                    </fieldset><br><br><br>
                </form>
                <form>
                    <fieldset style="background-color: transparent;width: 200px;height: 400px;margin-left: 800px;margin-top: -480px;">
                        <legend><h3>Community</h3></legend>
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
                    </fieldset><br><br><br>
                </form>
            </div>
        </div>

        <?php mysqli_close($conn); ?>
    </body>
</html> 