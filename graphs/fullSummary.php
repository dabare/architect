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
    array_push($datay[0], $year." ");

    $sql2 = "select sum(invoice.amount) as tot from project right join invoice on project.id = invoice.project_id where EXTRACT(YEAR from project.date) = '$year' AND project.category = 'Residential' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->tot;
        if (!$tot) {
            $tot = 0;
        }
        array_push($datay[1], $tot);
    }
    
    $sql2 = "select sum(invoice.amount) as tot from project right join invoice on project.id = invoice.project_id where EXTRACT(YEAR from project.date) = '$year' AND project.category = 'Community' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->tot;
        if (!$tot) {
            $tot = 0;
        }
        array_push($datay[2], $tot);
    }
    
     $sql2 = "select sum(invoice.amount) as tot from project right join invoice on project.id = invoice.project_id where EXTRACT(YEAR from project.date) = '$year' AND project.category = 'Industrial' AND project.architect_id = '$id';";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_object()) {
        $tot = $row2->tot;
        if (!$tot) {
            $tot = 0;
        }
        array_push($datay[3], $tot);
    }
}


// Some basic defines to specify the shape of the bar+table
$nbrbar = 10;
$cellwidth = 100;
$tableypos = 370;
$tablexpos = 65;
$tablewidth = $nbrbar * $cellwidth;
$rightmargin = 30;

// Overall graph size
$height = 500;
$width = 1100;

// Create the basic graph. 
$graph = new Graph($width, $height);
$graph->img->SetMargin(80, $rightmargin, 70, 70);
$graph->SetScale("textlin");
$graph->SetMarginColor('white');

// Setup titles and fonts
$graph->title->Set('Incume Summary');
$graph->title->SetFont(FF_VERDANA, FS_NORMAL, 14);
$graph->yaxis->title->Set("Income");
$graph->yaxis->title->SetFont(FF_ARIAL, FS_NORMAL, 12);
$graph->yaxis->title->SetMargin(25);
$graph->xaxis->SetTickLabels($datay[0]);
$graph->xaxis->title->Set("Year");

// Create the bars and the accbar plot
$bplot = new BarPlot($datay[3]);
$bplot->SetFillColor("orange");
$bplot2 = new BarPlot($datay[2]);
$bplot2->SetFillColor("red");
$bplot3 = new BarPlot($datay[1]);
$bplot3->SetFillColor("darkgreen");
$accbplot = new AccBarPlot(array($bplot, $bplot2, $bplot3));
$accbplot->value->Show();
$graph->Add($accbplot);



$conn->close();
$graph->Stroke();
?>