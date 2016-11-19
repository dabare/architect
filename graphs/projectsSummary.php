<?php

session_start();
require_once '../db/dbConnection.php';
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_bar.php");
$from = $_GET["from"];
$to = $_GET["to"];
$datay = array(
    array(),
    array(), // Residential
    array(), //Community
    array()); //Industrial

$id = $_SESSION["id"];
$sql = "select EXTRACT(YEAR FROM date) AS year from project where architect_id = '$id' AND architect_id = '$id' AND EXTRACT(YEAR FROM date)>='$from' AND EXTRACT(YEAR FROM date)<='$to' group by EXTRACT(YEAR FROM date) ORDER BY date;";
$result = $conn->query($sql);

while ($row = $result->fetch_object()) {
    $year = $row->year;
    array_push($datay[0], $year . " ");

    $sql2 = "select count(id) as countt from project where EXTRACT(YEAR from project.date) = '$year' AND project.category = 'Residential' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->countt;
        if (!$tot) {
            $tot = 0;
        }
        array_push($datay[1], $tot);
    }

    $sql2 = "select count(id) as countt from project where EXTRACT(YEAR from project.date) = '$year' AND project.category = 'Community' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->countt;
        if (!$tot) {
            $tot = 0;
        }
        array_push($datay[2], $tot);
    }

    $sql2 = "select count(id) as countt from project where EXTRACT(YEAR from project.date) = '$year' AND project.category = 'Industrial' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->countt;
        if (!$tot) {
            $tot = 0;
        }
        array_push($datay[3], $tot);
    }
}
$height = 500;
$width = 1100;
$graph = new Graph($width, $height);
$graph->img->SetMargin(80, 30, 70, 70);
$graph->SetScale("textlin");
$graph->SetMarginColor('white');

$graph->xaxis->SetTickLabels($gDateLocale->GetShortMonth());

$graph->xaxis->title->Set('Year');
$graph->yaxis->title->Set("Count");
$graph->xaxis->title->SetFont(FF_FONT1, FS_BOLD);

$graph->title->Set('Group bar plot');
$graph->title->SetFont(FF_FONT1, FS_BOLD);

$bplot1 = new BarPlot($datay[1]);
$bplot2 = new BarPlot($datay[2]);
$bplot3 = new BarPlot($datay[3]);

$bplot1->SetFillColor("orange");
$bplot2->SetFillColor("brown");
$bplot3->SetFillColor("darkgreen");

$bplot1->SetShadow();
$bplot2->SetShadow();
$bplot3->SetShadow();

$bplot1->SetShadow();
$bplot2->SetShadow();
$bplot3->SetShadow();

$graph->xaxis->SetTickLabels($datay[0]);
$gbarplot = new GroupBarPlot(array($bplot1, $bplot2, $bplot3));
$gbarplot->SetWidth(0.6);
$graph->Add($gbarplot);


$conn->close();
$graph->Stroke();
?>