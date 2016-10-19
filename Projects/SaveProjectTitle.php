<?php

require_once '../db/dbConnection.php';
$id = $_POST['id'];
$title = $_POST['title'];



$sql = "UPDATE project SET title='" . $title . "' WHERE id='" . $id . "'";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Title Updated to: ' . $title . '");
				window.location = "../ArchitectViewProject.php?id=' . $id . '";
			</script>';
} else {
    echo '<script>
				alert("Title not updated");
				window.location = "../ArchitectViewProject.php?id=' . $id . '";
			</script>';
}
mysqli_close($conn);
?>