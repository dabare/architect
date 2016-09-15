<?php

require_once '../db/dbConnection.php';
$projectid = $_POST['prid'];
$invoiceid = $_POST['inid'];



$sql = "DELETE FROM invoice WHERE id='" . $invoiceid . "'";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Invoice IN'.$invoiceid.' Deleted");
				window.location = "../ArchitectViewProject.php?id=' . $projectid . '";
			</script>';
} else {
    echo '<script>
				alert("Invoice IN'.$invoiceid.' not Deleted");
				window.location = "../ArchitectViewProject.php?id=' . $projectid . '";
			</script>';
}
mysqli_close($conn);
?>