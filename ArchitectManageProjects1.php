
<?php
require_once './db/dbConnection.php';

$id = $_GET['id'];


$sql = "SELECT * FROM g_project WHERE id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $category = $row["category"];
        $description = $row["description"];
        $title = $row["title"];
        $finish = $row["finish"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Gallery</title>

        <link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
        <meta charset="utf-8">

    </head>
    <body id="bdy">
        <ul id="navigationbarEdit">

            <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
            <li><a id="activeEdit" href="ArchitectManageProjects.php">Gallery</a></li>
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            <li><a id="editItem" href="ArchitectEmployees.php">Employees</a></li>
            <li><a id="editItem" href="ArchitectEditProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>
        </ul>
        <div class="sidebar_1">
            <div id="border">
                <form>
                    <div style="margin-left: 10px;">
                        <font style="padding: 10px;"><h3>Edit Gallery</h3></font><br><br>
                        <div>
                            <div style="display:inline-block;margin-left: 30px;">
                                Category of the Project:
                                <select  name="category" >
                                    <option<?php
                                    if ($category == "Industrial") {
                                        echo ' selected';
                                    }
                                    ?> value="Industrial">Industrial</option>
                                    <option<?php
                                    if ($category == "Residential") {
                                        echo ' selected';
                                    }
                                    ?> value="Residential">Residential</option>
                                    <option<?php
                                    if ($category == "Community") {
                                        echo ' selected';
                                    }
                                    ?> value="Community">Community</option>
                                </select>

                            </div>
                            <div style="display:inline-block;margin-left: 100px;margin-top: -50px;">
                                Title:
                                <textarea rows="1" cols="40"><?php echo $title; ?></textarea>
                            </div>
                        </div><br><br> 
                        <div style="text-align: justify;width: 80%;">
                            Table of Project Descriptions and Images:<br><br>
                            <div style="overflow: scroll ; height: 300px;">
                                <table >
                                    <tr>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th></th>
                                    </tr>

                                    <?php
                                    $sql = "SELECT * FROM g_image WHERE g_project_id=" . $id . ";";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row

                                        while ($row = $result->fetch_assoc()) {
                                            echo '<tr>';
                                            echo '
                                                <td>' . $row["description"] . '</td>
                                        <td><a><img src="./uploads/' . $row["url"] . '"  width="200" height="100"></a></td>
                                           <td><button type="button" onclick="deletePhoto(' . $row["id"] . ')">Delete</button></td>';
                                            echo '</tr>';
                                        }
                                    }
                                    ?>

                                    <script>

                                        document.getElementById("date").valueAsDate = new Date();
                                        getNewInvoiceNo();

                                        function deletePhoto(imid) {
                                            if (confirm("Confirm delete photo ") == true) {


                                                var form = document.createElement("form");
                                                form.setAttribute("method", "post");
                                                form.setAttribute("action", "Projects/DeleteGalleryPhoto.php");




                                                var pid = document.createElement("input");
                                                pid.setAttribute("type", "hidden");
                                                pid.setAttribute("name", "prid");
                                                pid.setAttribute("value", <?php echo $id ?>);


                                                form.appendChild(pid);

                                                var iid = document.createElement("input");
                                                iid.setAttribute("type", "hidden");
                                                iid.setAttribute("name", "imid");
                                                iid.setAttribute("value", imid);


                                                form.appendChild(iid);



                                                document.body.appendChild(form);
                                                form.submit();

                                                form.appendChild(id);


                                                document.body.appendChild(form);
                                                form.submit();
                                            } else {

                                            }

                                        }


                                        function setPayementDetails(inv, des, typ, cn, amount, date) {

                                            $('html,body').animate({
                                                scrollTop: $("#paymentform").offset().top},
                                                    'slow');
                                            document.getElementById("invoicenum").value = inv;
                                            document.getElementById("descriptio").value = des;
                                            document.getElementById("paymenttype").value = typ;
                                            document.getElementById("chequeno").value = cn;
                                            document.getElementById("amount").value = amount;
                                            document.getElementById("date").value = date;
                                            changePayment(document.getElementById("paymenttype"));
                                        }



                                        function getNewInvoiceNo() {

                                            var xmlhttp = new XMLHttpRequest();
                                            xmlhttp.onreadystatechange = function () {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    document.getElementById("invoicenum").value = this.responseText;
                                                    document.getElementById("descriptio").value = "";
                                                    document.getElementById("chequeno").value = "";
                                                    document.getElementById("amount").value = "";
                                                    document.getElementById("date").valueAsDate = new Date();
                                                }
                                            };
                                            xmlhttp.open("GET", "Projects/GetNewInvoiceNo.php", true);
                                            xmlhttp.send();

                                        }

                                        document.getElementById("chequeno").required = true;
                                        function changePayment(element)
                                        {
                                            if (element.value == "Cheque") {
                                                document.getElementById("chequeno").disabled = false;
                                                document.getElementById("chequeno").required = true;
                                            } else {
                                                document.getElementById("chequeno").disabled = true;
                                                document.getElementById("chequeno").required = false;
                                                document.getElementById("chequeno").value = "";
                                            }
                                        }

                                        function PaymetnValidateForm() {

                                            document.getElementById("invoicenum").disabled = false;
                                            return true;
                                        }
                                    </script>
                                </table></div>
                            <br><br>
                        </div>
                        <div>
                            <div style="display: inline-block">
                                Select Images:
                                <input id="files" type="file" name="pic" accept="image/*" onchange="readURL(this)">  
                            </div>
                            <div style="display: inline-block">
                                Description:<br>
                                <textarea rows="4" cols="50" style="position: left"></textarea> 
                            </div>
                            <div style="margin-left: 750px;">
                                <button type="button"  style="width: 100px;height: 30px;">Add</button>
                            </div>
                        </div><br><br>
                        <div>
                            <fieldset style="width: 800px">
                                <legend>Entire Description</legend>
                                <br><br>
                                Description:<br>
                                <textarea rows="5" cols="50"><?php echo $description; ?></textarea>
                            </fieldset>
                        </div><br><br>
                        <div style="margin-left: 750px;">
                            <button type="button"  style="width: 100px;height: 30px;">Save</button>
                        </div><br><br>
                    </div>
                </form>
            </div><br><br>
        </div>
    </body>
</html>