<?php
session_start();
unset($_SESSION["usernamee"]);
session_regenerate_id();
session_destroy();
header("location:index.php");
?>