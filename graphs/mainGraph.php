<?php

// content="text/plain; charset=utf-8"
// $Id: piecex2.php,v 1.3.2.1 2003/08/19 20:40:12 aditus Exp $
// Example of pie with center circle
session_start();
require_once '../db/dbConnection.php';
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');

$id = $_SESSION["id"];
$sql = "select category , count(id) AS num from project where architect_id = $id GROUP BY category ;";
$result = $conn->query($sql);
$data = array();
$lbl = array();

while ($row = $result->fetch_object()) {
    array_push($data, $row->num);
    array_push($lbl, $row->category."\n%.1f%%");
}
// Some data
// A new pie graph
$graph = new PieGraph(400, 400, 'auto');

// Don't display the border
$graph->SetFrame(false);

// Uncomment this line to add a drop shadow to the border
//$graph->SetShadow();
// Setup title
// Create the pie plot
$p1 = new PiePlotC($data);

// Set size of pie
$p1->SetSize(0.35);

// Label font and color setup
$p1->value->SetFont(FF_ARIAL, FS_BOLD, 12);
$p1->value->SetColor('white');

$p1->value->Show();

// Setup the title on the center circle
$p1->midtitle->Set("Projects\nsummary");
$p1->midtitle->SetFont(FF_ARIAL, FS_NORMAL, 14);

// Set color for mid circle
$p1->SetMidColor('yellow');

// Use percentage values in the legends values (This is also the default)
$p1->SetLabelType(PIE_VALUE_PER);

// The label array values may have printf() formatting in them. The argument to the
// form,at string will be the value of the slice (either the percetage or absolute
// depending on what was specified in the SetLabelType() above.
// 
//$lbl = array("adam", "bertil\n%.1f%%", "johan\n%.1f%%",
//    "peter\n%.1f%%");

$p1->SetLabels($lbl);

// Uncomment this line to remove the borders around the slices
// $p1->ShowBorder(false);
// Add drop shadow to slices
$p1->SetShadow();

// Explode all slices 15 pixels
$p1->ExplodeAll(10);

// Add plot to pie graph
$graph->Add($p1);

// .. and send the image on it's marry way to the browser
$graph->Stroke();
?>