<?php
require_once './db/dbConnection.php';

$id=$_GET['id'];

$sql = "SELECT * FROM project WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $city = $row["city"];
        $estcost = $row["estimated_cost"];
        $progress = $row["progress"];
        $cusID = $row["customer_id"];
    }
}



$sql = "SELECT * FROM customer WHERE id=" . $cusID . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        $cusName = $row["lname"] . "_" . $row["fname"];
    }
}
$sql = "SELECT SUM(amount) FROM invoice WHERE project_id = " . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        $TotalPayment = $row["SUM(amount)"];
    }
}

if ($TotalPayment == "") {
    $TotalPayment = 0;
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

                <li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Customer</a></li>

            </ul>
        </div>

        <!--Page Container-->
        <div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 10px">
            <!--The Grid-->
            <div class="row">

                <!-- left panel -->
                <ul id="navigationbarEdit" style="margin-top:0px">
                    <li><a id="editItem" href="CustomerNotification.php">Notification</a></li>
                    <li><a id="activeEdit" href="CustomerEditProfile1.php">My Profile</a></li>
                    
                    <li><a id="editItem" href="CustomerMakeAppointments.php">Consultants</a></li>
                    <li><a id="editItem" href="logout.php">Logout</a></li>

                </ul>
            </div>
        </div>
            
            <?php
                $sql = "SELECT * FROM project WHERE id=" . $id . " ;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        echo '<center><h1>' . $row["title"] . '</h1></center>';
                        
                    }
                }
                ?>
                
            <div class="l_sidebar" style="width:300px;margin-left: 20%;">

                <h2>Payments Done:</h2>
                <div style="height: 10px; background-color: green;"></div>


                <?php
                $sql = "SELECT * FROM invoice WHERE project_id=" . $id . " ORDER BY date DESC , id DESC;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div>';
                        echo '<div style = "display: inline-block;">';
                        echo '<h3>' . $row["date"] . '</h3>';
                        echo 'IN' . $row["id"] . '<br>';
                        echo $row["type"] . ' ' . $row["chequeno"] . '<br>';
                        echo 'RS ' . $row["amount"] . '/=';
                        echo '<textarea disabled = "true" rows = "2"  style = "position: center; width: 98%">' . $row["description"] . '</textarea><br><br>';
                        echo '</div>';
                        echo '<div style = "height: 10px; background-color: gray;"></div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>

        </div>


        <div  style="width:750px;margin-left: 550px;margin-top: -50px;">
            <div style="background-color: whitesmoke;">
                <div style="align-content: center;text-align: left;padding: 2em;">
                    <center><h2>Project Progress</h2></center>
                    <?php
                    $v = $progress / 100;

                    if ($v >= 0.15) {
                        echo '<input type = "checkbox" id = "c1" disabled checked >Interview and initial discussions <br>';
                    } else {
                        echo '<input type = "checkbox" id = "c1" disabled  >Interview and initial discussions <br>';
                    }

                    if ($v >= 0.3) {
                        echo '<input type = "checkbox" id = "c2" disabled checked >Information gathering<br>';
                    } else {
                        echo '<input type = "checkbox" id = "c2" disabled  >Information gathering<br>';
                    }

                    if ($v >= 0.4) {
                        echo '<input type = "checkbox" id = "c3" disabled checked >Schematic Design and Feasibility<br>';
                    } else {
                        echo '<input type = "checkbox" id = "c3" disabled  >Schematic Design and Feasibility<br>';
                    }

                    if ($v >= 0.5) {
                        echo '<input type = "checkbox" id = "c4" disabled checked >Design Development and Permit Documents<br>';
                    } else {
                        echo '<input type = "checkbox" id = "c4" disabled  >Design Development and Permit Documents<br>';
                    }

                    if ($v >= 0.6) {
                        echo '<input type = "checkbox" id = "c5" disabled checked >Construction Documents and Permit Acquisition<br>';
                    } else {
                        echo '<input type = "checkbox" id = "c5" disabled  >Construction Documents and Permit Acquisition<br>';
                    }

                    if ($v >= 0.8) {
                        echo '<input type = "checkbox" id = "c6" disabled checked >Selection of a General Contractor<br>';
                    } else {
                        echo '<input type = "checkbox" id = "c6" disabled  >Selection of a General Contractor<br>';
                    }

                    if ($v >= 0.9) {
                        echo '<input type = "checkbox" id = "c7" disabled checked >Construction Administration<br>';
                    } else {
                        echo '<input type = "checkbox" id = "c7" disabled  >Construction Administration<br>';
                    }

                    if ($v >= 1.0) {
                        echo '<input type = "checkbox" id = "c8" disabled checked >Finish<br>';
                    } else {
                        echo '<input type = "checkbox" id = "c8" disabled  >Finish<br>';
                    }
                    ?>

                    <h4>Completed: </h4>
                    <meter id="myMeter" style="width: 100%;" value="<?php echo $v; ?>"></meter> 

                </div>
            </div>

            <div style="height: 20px;"></div>




            <div style="background-color: whitesmoke; ">
                <form onsubmit="return PostValidateForm()" action="Projects/SaveProjectPostClient.php" method="post"  enctype="multipart/form-data">
                    <div style="text-align: left;padding: 2em;">
                        <input  name="prid"  hidden="true" value="<?php echo $id ?>">
                        <h3>Add Post:</h3>
                        <select id="posttype" name="type" onchange="changePoost(this)">
                            <option value="Post">Post</option>
                            <option value="Image">Image</option>
                            <option value="Document">Document</option>
                        </select> 
                        <input id="postfile" type="file" name="fileToUpload"  ><br><br>
                        <br>
                        Description:<br>

                        <textarea id="postdescription" rows="4" name="desc" style="position: center; width: 100%"></textarea><br><br>
                        <input style="float: right;width: 40%;"type="submit" name="submit" value="Post"><br>
                    </div>
                </form>
            </div>
            <script>

                document.getElementById("postfile").hidden = true;
                document.getElementById("postdescription").required = true;
                function changePoost(element)
                {
                    if (element.value == "Post") {
                        document.getElementById("postfile").value = "";
                        document.getElementById("postfile").hidden = true;
                        document.getElementById("postdescription").required = true;

                    } else {
                        document.getElementById("postfile").value = "";
                        document.getElementById("postfile").hidden = false;
                        document.getElementById("postdescription").required = false;
                    }

                    if (element.value == "Image") {
                        document.getElementById("postfile").accept = "image/*";
                    }

                    if (element.value == "Document") {
                        document.getElementById("postfile").accept = ".pdf";
                    }

                }

                function PostValidateForm() {
                    if (document.getElementById("posttype").value != "Post") {
                        if (document.getElementById("postfile").value == "") {
                            alert("Select an attachmen");
                            return false;
                        }

                    }
                    return true;
                }
            </script>
            <div style="height: 20px;"></div>




            <?php
            $sql = "SELECT * FROM post WHERE project_id=" . $id . " ORDER BY date DESC;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $postid = $row["id"];
                    $postdescription = $row["description"];
                    $postdate = $row["date"];
                    $posttype = $row["type"];
                    $postby = $row["byy"];
                    $path = $row["format"];


                    if ($postby == "Architect") {
                        echo '<div style="background-color: lightblue; ">
                <form">
                    <div style="text-align: left;padding: 2em;">
                        <input type="text" hidden="true" name="postid" value="' . $postid . '">
                        <input type="text" hidden="true" name="proid" value="' . $id . '">
                        <h3>ID:' . $postid . '</h3><h3>By:Architect</h3>';
                    } else {

                        echo '<div style="background-color: lightgreen; ">
                <form onsubmit="return PostDeleteConfirmeForm()" action="Projects/DeleteProjectPostClient.php" method="post">
                    <div style="text-align: left;padding: 2em;">
                        <input type="text" hidden="true" name="postid" value="' . $postid . '">
                        <input type="text" hidden="true" name="proid" value="' . $id . '">
                        <h3>ID:' . $postid . '</h3><h3>By:Me</h3>';
                    }



                    if ($posttype == "Image") {
                        echo '<a href="uploads/' . $path . '"  target="_blank" ><img src="uploads/' . $path . '" style="width:  20%;"></a>';
                    } elseif ($posttype == "Document") {
                        echo '<a href="uploads/' . $path . '"  target="_blank">PDF:></a><br>';
                    }

                    echo '<br>

                        <textarea id="description" rows="4" style="font-size: 20px;position: center; width: 100%" disabled="true">' . $postdescription . '</textarea><br><br>
                        <font size="2" color="blue">' . $postdate . '</font>';

                    if ($row["seen"] == 1 && $postby == "Client") {

                        echo '<font style="float: right;" size="2" color="red">Seen</font><br>';
                    }
                    if ($postby == "Client") {
                        echo '<br><input style="float: right;width: 40%;"type="submit" value="Remove"><br>';
                    }

                    echo '     </div>
                </form>

            </div>
            <div style="height: 20px;"></div>

                ';
                }
            }







            $sql = "UPDATE post SET seen=1 WHERE project_id='" . $id . "' AND byy = 'Architect'";
            mysqli_query($conn, $sql);
            ?>
            <script>
                function PostDeleteConfirmeForm() {
                    if (confirm("Confirm delete post") == true) {
                        return true;

                    } else {
                        return false;
                    }
                }
            </script>


            </div>
            </div>
        </div>
<?php $conn->close(); ?>
    </body>
</html> 

