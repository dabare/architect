<?php

require_once '../db/dbConnection.php';



$consultantid = $_POST['consulid'];

if($status == "on"){
    $status = "active";
}else{
    $status = "inactive";
}



$sql = "DELETE FROM consultants  WHERE id='" . $consultantid . "';";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Consultant Deleted");
				window.location = "../consultant.php";
			</script>';
} else {
    echo '<script>
				alert("Delete Failed");
				window.location = "../ArchitectViewConsultant.php?id=' . $consultantid . '";
			</script>';
}

mysqli_close($conn);
?>
