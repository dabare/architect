<?php

require_once './db/dbConnection.php';



$year = $_GET["year"];
$month = $_GET["month"];

$titleMonth = "";
$titleYear = $year;
if($month!=0){
    $titleMonth = date("F",strtotime($year."-".$month."-01"));
    $year = "$year and month(invoice.date) = $month";
}

$sql = "select sum(invoice.amount) as tot from invoice left join project on invoice.project_id=project.id where year(invoice.date) = $year  and project.category='Industrial' and project.status='active';";

$result = $conn->query($sql);
  if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
           $iTotal = $row["tot"];

        }
  }

$sql = "select sum(invoice.amount) as tot from invoice left join project on invoice.project_id=project.id where year(invoice.date) = $year  and project.category='Residential' and project.status='active';";

$result = $conn->query($sql);
  if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
           $rTotal = $row["tot"];

        }
  }

$sql = "select sum(invoice.amount) as tot from invoice left join project on invoice.project_id=project.id where year(invoice.date) = $year  and project.category='Community' and project.status='active';";

$result = $conn->query($sql);
  if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
           $cTotal = $row["tot"];

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
    <br>
    <div class="ibox float-e-margins ">
        <div class="ibox-title">
            <h5>Income Report for <?=$titleYear?> <?=$titleMonth?></h5> 
        </div>
        <div class="ibox-content">
            <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                                
                            <tr>
                                <td><strong>Industrial</strong></td>
                                <td>RS. <?=number_format($iTotal)?> /=</td>
                            </tr>
                            <tr>
                                <td><strong>Residential</strong></td>
                                <td> RS. <?=number_format($rTotal)?> /=</td>
                            </tr>
                            <tr>
                                <td><strong>Community</strong></td>
                                <td> RS. <?=number_format($cTotal)?> /=</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>TOTAL</strong></td>
                                <td><strong> RS. <?=number_format($cTotal+$rTotal+$iTotal)?> /=</strong></td>
                            </tr>
                           
                            </tbody>
                        </table>

            
            <br>
        </div>
    </div>
   <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Industrial</h5>
                        
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Title</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select invoice.id as id , invoice.amount as amount , invoice.date as date ,  project.title as title  from invoice left join project on invoice.project_id=project.id where year(invoice.date) = $year  and project.category='Industrial'  and project.status='active' order by invoice.date;";

                                $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                       while ($row = $result->fetch_assoc()) {
                                          ?>
                                
                                
                            <tr>
                                <td><?=$row["id"]?></td>
                                <td>RS. <?=number_format($row["amount"])?> /=</td>
                                <td><?=$row["date"]?></td>
                                <td><?=$row["title"]?></td>
                            </tr>
                                <?php
                                        }
                                  }
                                
                                ?>
                           
                            </tbody>
                        </table>

                    </div>
                </div>
    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Residential</h5>
                        
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Title</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select invoice.id as id , invoice.amount as amount , invoice.date as date ,  project.title as title  from invoice left join project on invoice.project_id=project.id where year(invoice.date) = $year  and project.category='Residential'  and project.status='active' order by invoice.date;";

                                $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                       while ($row = $result->fetch_assoc()) {
                                          ?>
                                
                                
                            <tr>
                                <td><?=$row["id"]?></td>
                                <td>RS. <?=number_format($row["amount"])?> /=</td>
                                <td><?=$row["date"]?></td>
                                <td><?=$row["title"]?></td>
                            </tr>
                                <?php
                                        }
                                  }
                                
                                ?>
                           
                            </tbody>
                        </table>

                    </div>
                </div>
    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Community</h5>
                        
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Title</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select invoice.id as id , invoice.amount as amount , invoice.date as date ,  project.title as title  from invoice left join project on invoice.project_id=project.id where year(invoice.date) = $year  and project.category='Community'  and project.status='active' order by invoice.date;";

                                $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                       while ($row = $result->fetch_assoc()) {
                                          ?>
                                
                                
                            <tr>
                                <td><?=$row["id"]?></td>
                                <td>RS. <?=number_format($row["amount"])?> /=</td>
                                <td><?=$row["date"]?></td>
                                <td><?=$row["title"]?></td>
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

    
    
    
      <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <script src="js/demo/peity-demo.js"></script>

    <!-- Page-Level Scripts -->
    
</html>
<?php 

mysqli_close($conn);
?>