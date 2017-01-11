<?php

require_once './db/dbConnection.php';



$id = $_GET["id"];

$sql = "SELECT title FROM project WHERE id=" . $id . ";";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        
                        while ($row = $result->fetch_assoc()) {
                           $title = $row["title"];
                        }
                    }



						
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Report</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Payments of <?=$title?></h5>
                        
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Discription</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                
$sql = "SELECT * FROM invoice WHERE project_id=" . $id . " ORDER BY date DESC , id DESC;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        
                        while ($row = $result->fetch_assoc()) {
                           
                            
                            ?>
                                
                            <tr>
                                <td><?=$row["id"]?></td>
                                <td><?=$row["type"]." ".$row["chequeno"]?></td>
                                <td><?=$row["amount"]?></td>
                                <td><?=$row["date"]?></td>
                                <td><?=$row["description"]?></td>
                            </tr>
                                
                                <?php
                        }
                    }
                                ?>
                            
                            </tbody>
                        </table>

                    </div>
                </div>
   </body>

    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <style>

    </style>

    <!-- Page-Level Scripts -->
    
</html>
<?php
	

mysqli_close($conn);
?>