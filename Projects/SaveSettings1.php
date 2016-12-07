<?php

require_once '../db/dbConnection.php';

$stid = $_POST['stid'];
$value = $_POST['setting'];


$sql = "UPDATE settings SET value='" . $value . "'  WHERE id='1';";
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
