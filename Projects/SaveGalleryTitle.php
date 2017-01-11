<?php

require_once '../db/dbConnection.php';



$projectid = $_POST['prid'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['desc'];

$sql = "UPDATE g_project SET category='" . $category . "' , description = '" . $description . "' , title = '" . $title . "'  WHERE id='" . $projectid . "';";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Gallery Updated");
				window.location = "../gallery1.php?id=' . $projectid . '";
			</script>';
} else {
    echo '<script>
				alert("Save Failed");
				window.location = "../gallery1.php?id=' . $projectid . '";
			</script>';
}
mysqli_close($conn);
?>