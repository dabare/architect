<?php

require_once '../db/dbConnection.php';



$awardid = $_POST['awid'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['desc'];

$sql = "UPDATE award SET category='" . $category . "' , description = '" . $description . "' , title = '" . $title . "'  WHERE id='" . $awardid . "';";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Awards Updated");
				window.location = "../ArchitectManageAwards1.php?id=' . $awardid . '";
			</script>';
} else {
    echo '<script>
				alert("Save Failed");
				window.location = "../ArchitectManageAwards1.php?id=' . $awardid . '";
			</script>';
}
mysqli_close($conn);
?>
