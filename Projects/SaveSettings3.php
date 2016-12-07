<?php

require_once '../db/dbConnection.php';

$stid = $_POST['id'];
$value = $_POST['setaward'];


$sql = "UPDATE settings SET value='" . $value . "'  WHERE id='3';";
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
