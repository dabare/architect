<?php

require_once '../db/dbConnection.php';
$awardid = $_POST['awid'];


$sql = "DELETE from award WHERE id='" . $awardid . "';";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Award Deleted");
				window.location = "../awards.php";
				
			</script>';
} else {
    echo '<script>
				alert("Award not Deleted");
                                window.location = "../ArchitectManageAwards1.php?id=' . $awardid . '";
			</script>';
}
mysqli_close($conn);
?>