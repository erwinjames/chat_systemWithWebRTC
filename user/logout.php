<?php
session_start();
$o = $_GET['userid'];
if($o == $_SESSION['id']){
	session_unset($_SESSION['id']);
	header('location:../');
}
?>	