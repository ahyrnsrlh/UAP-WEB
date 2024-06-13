<<<<<<< HEAD
<?php
include "mysql_mysqli.inc.php";
?>
<?php
$host="localhost";
$user="root";
$pass="";
$database="jasa";

$conn =mysql_connect($host, $user, $pass, $database);
mysql_select_db($database,$conn);
=======
<?php
include "mysql_mysqli.inc.php";
?>
<?php
$host="localhost";
$user="root";
$pass="";
$database="jasa";

$conn =mysql_connect($host, $user, $pass, $database);
mysql_select_db($database,$conn);
>>>>>>> 6f9d26b7ac5b194c886ec132d8e7f256a2270a75
?>