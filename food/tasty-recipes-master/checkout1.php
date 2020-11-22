<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['data']);
unset($_SESSION['cb']);
header("Location:index.html"); 
?>