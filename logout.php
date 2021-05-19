<?php include 'meta.php';?>

<?php
   unset($_SESSION["nick"]);
   unset($_SESSION["password"]);
   header('Location: index.php');
?>