<?php

require_once '../db/dbConnection.php';



$consultant = $_POST['consultant'];
$project_id = $_POST['project_id'];
$description = $_POST['description'];
$conDet = explode("_", $consultant);
$consultant_id = $conDet[0];
$category = $conDet[count($conDet)-1];
$name = $conDet[1];

$sql = "insert into consultant_assign values('$project_id' , '$consultant_id' , '$category' , '$name' , '$description' , 'Ongoing')";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Consultant Added");
				window.location = "../ArchitectViewProject.php?id=' . $project_id . '";
			</script>';
} else {
    echo '<script>
				alert("Error Occured");
				window.location = "../ArchitectViewProject.php?id=' . $project_id . '";
			</script>';
}
mysqli_close($conn);
?>
