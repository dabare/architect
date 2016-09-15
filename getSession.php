<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
// Echo session variables that were set on previous page
        echo "id is " . $_SESSION["id"] . ".<br>";
        ?>

    </body>
</html>