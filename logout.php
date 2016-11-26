<?php
session_start();
?>
<?php
session_unset();

session_destroy(); 
?>
'<script>
    window.location = "index.php#login";
</script>';