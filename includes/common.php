<?php
$con = mysqli_connect("localhost", "root", "1234", "store") or die($mysqli_error($con));
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>