<?php

require_once '../db/dbConnection.php';



$consultantid = $_POST['consulid'];

$sql = "UPDATE consultants SET status='inactive' WHERE id='" . $consultantid . "';";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Consultant Details Updated");
				window.location = "../ArchitectConsultants.php?id=' . $consultantid . '";
			</script>';
} else {
    echo '<script>
				alert("Update Failed");
				window.location = "../ArchitectConsultants.php?id=' . $consultantid . '";
			</script>';
}
mysqli_close($conn);
?>
