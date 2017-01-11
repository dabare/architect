<?php

require_once '../db/dbConnection.php';

$stid = $_POST['stid'];
$value = $_POST['setting'];


$sql = "UPDATE settings SET value='" . $value . "'  WHERE id='$stid';";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Settings Updated");
				window.location = "../settings.php";
			</script>';
} else {
    echo '<script>
				alert("Save Failed");
				window.location = "../settings.php";
			</script>';
}
mysqli_close($conn);
?>
