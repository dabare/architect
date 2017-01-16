<?php
require_once './db/dbConnection.php';
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
        <br>
        <div class="ibox float-e-margins ">
            <div class="ibox-title">
                <h5>Consultants Payment</h5> 
            </div>
            <div class="ibox-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Tel.</th>
                            <th>Email</th>
                            <th>Payment(RS.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        $sql = "select * from consultants where status = 'active' order by category";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= $row["fname"] . " " . $row["mname"] . " " . $row["lname"] ?></td>
                                    <td><?= $row["category"] ?></td>
                                    <td><?= $row["mobile_no"] . ", " . $row["land_no"] ?></td>
                                    <td><?= $row["email"] ?></td>
                                    <td><?= number_format($row["payment"]) ?>/=</td>
                                </tr>
                                <?php
                                $total += $row["payment"];
                            }
                        }
                        ?>
                        <tr></tr>
                        <tr>
                            <td><strong>Total:</strong></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong><?= number_format($total) ?>/=</strong></td>

                        </tr>
                    </tbody>
                </table>


                <br>
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




    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <script src="js/demo/peity-demo.js"></script>

    <!-- Page-Level Scripts -->

</html>
<?php
mysqli_close($conn);
?>