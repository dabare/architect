<?php

require_once './db/dbConnection.php';



$filter = $_GET["c"];

$sql = "SELECT customer.lname as lname, customer.fname fname , project.title as title , project.city as city , project.pdate as pdate FROM PROJECT left join customer on project.customer_id = customer.id where category = '$filter' and progress = 100 ;";


$result = $conn->query($sql);

  



							

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Completed <?=ucfirst($filter)?> Projects</title>
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
   <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Completed <?=ucfirst($filter)?> Projects</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Project Title</th>
                        <th>Customer</th>
                        <th>City</th>
                        <th>Initiated Date</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                          if ($result->num_rows > 0) {
                               while ($row = $result->fetch_assoc()) {
                                    
                                    
                                    ?>
                        
                    <tr >
                        <td><?php echo $row["title"];?></td>
                        <td><?php echo $row["lname"]." ".$row["fname"]?></td>
                        <td><?php echo $row["city"];?></td>
                        <td><?php echo $row["pdate"];?></td>
                    </tr>
                        
                        <?php
                                }
                          }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Project Title</th>
                        <th>Customer</th>
                        <th>City</th>
                        <th>Initiated Date</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
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
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                "dom": 'lTfigt',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( 'http://webapplayers.com/example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });
    </script>
</html>