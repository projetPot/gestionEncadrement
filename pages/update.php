<?php session_start(); 
$code = $_GET['code'];
include ($code.'.php');
?>
