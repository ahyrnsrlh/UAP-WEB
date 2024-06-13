<<<<<<< HEAD
<?php
session_start();

unset($_SESSION['username']);
session_unset();
session_destroy();

?>
<script>document.location.href="../index.php"
</script>
<?
include "../index.php";
=======
<?php
session_start();

unset($_SESSION['username']);
session_unset();
session_destroy();

?>
<script>document.location.href="../index.php"
</script>
<?
include "../index.php";
>>>>>>> 6f9d26b7ac5b194c886ec132d8e7f256a2270a75
?>