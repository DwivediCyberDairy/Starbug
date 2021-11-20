<?php 
session_start();
session_unset();
session_destroy();
echo "<script>window.history.forward();window.location.href='../index';</script>";
?>

