<?php

require_once '../db/dbConnection.php';
$id = $_POST['id'];
$title = $_POST['title'];
$priority = $_POST['priority'];


$sql = "UPDATE project SET title='" . $title . "' , priority='" . $priority . "'  WHERE id='" . $id . "'";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Project Updated");
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