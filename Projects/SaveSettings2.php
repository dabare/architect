<?php

require_once '../db/dbConnection.php';

$setid = $_POST['setid'];

$value = $_POST['project'];


$sql = "UPDATE settings SET value='" . $value . "'  WHERE id='" . $setid . "';";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Settings Updated");
				window.location = "../ArchitectSettings.php";
			</script>';
} else {
    echo '<script>
				alert("Save Failed");
				window.location = "../ArchitectSettings.php";
			</script>';
}
mysqli_close($conn);
?>
