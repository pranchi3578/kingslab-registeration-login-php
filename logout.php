<?php
session_start();
unset($_SESSION["phone"]);
header("Location:login.html");
?>