<?php 
error_reporting(E_ALL ^ E_NOTICE);  
include_once 'C_login.php';

if ($_SESSION['data']['role'] == "user") {
    echo "";
} elseif ($_SESSION['data']['role'] == "admin") {
    echo "";
} elseif ($_SESSION['data']['role'] == "owner") {
    echo "";
} else {
	header("location:index.php");
}
?>