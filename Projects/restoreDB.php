<?php

require_once '../db/user.php';
$file = $_POST["file"];
$submit = $_POST["submit"];

if ($submit == "Download") {
    $file = '.' . $file;

    if (file_exists($file)&&$file!=".") {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }

    echo '<script>
				window.location = "../settings.php";
		</script>';
} else {
    $filename = '.' . $file;
// Temporary variable, used to store current query

    mysql_connect($servername, $username, $password) or die('Error connecting to MySQL server: ' . mysql_error());
    mysql_query("DROP DATABASE IF EXISTS $dbname ;") or die('Error Deleting Database: ' . mysql_error());
    mysql_query("CREATE DATABASE IF NOT EXISTS $dbname ;") or die('Error CREATING Database: ' . mysql_error());
    mysql_select_db($dbname) or die('Error selecting MySQL database: ' . mysql_error());
    $templine = '';
// Read in entire file
    $lines = file($filename);
// Loop through each line
    foreach ($lines as $line) {
// Skip it if it's a comment
        if (substr($line, 0, 2) == '--' || $line == '')
            continue;

// Add this line to the current segment
        $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';') {
            // Perform the query
            mysql_query($templine) or print '<script> alert("Restore Failed"); window.location = "../settings.php"; </script>';
            $templine = '';
        }
    }
    echo '<script>
				alert("Restore Success");
				window.location = "../settings.php";
		</script>';
}
?>
