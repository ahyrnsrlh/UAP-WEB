<<<<<<< HEAD
<?php
  session_start();
  if(!isset($_SESSION['username'])) {
  header('location:../index.php'); }
  else { $username = $_SESSION['username']; }
  require_once("koneksi.php");
  $query = mysql_query("SELECT * FROM user WHERE username = '$username'");
  $hasil = mysql_fetch_array($query);
=======
<?php
  session_start();
  if(!isset($_SESSION['username'])) {
  header('location:../index.php'); }
  else { $username = $_SESSION['username']; }
  require_once("koneksi.php");
  $query = mysql_query("SELECT * FROM user WHERE username = '$username'");
  $hasil = mysql_fetch_array($query);
>>>>>>> 6f9d26b7ac5b194c886ec132d8e7f256a2270a75
?>