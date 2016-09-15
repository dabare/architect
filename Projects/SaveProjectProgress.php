<?php

require_once '../db/dbConnection.php';
$id = $_POST['id'];
$title = $_POST['value']*100;



$sql = "UPDATE project SET progress='" . $title . "' WHERE id='" . $id . "'";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Progress Updated to: ' . $title . '%");
				window.location = "../ArchitectViewProject.php?id=' . $id . '";
			</script>';
} else {
    echo '<script>
				alert("Progress not updated");
				window.location = "../ArchitectViewProject.php?id=' . $id . '";
			</script>';
}
mysqli_close($conn);
?>