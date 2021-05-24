<?php 
session_start();
// setcookie('cookie_name', 'your name', time() + (86400 * 1), "/"); // 86400 = 1 day

// echo $_COOKIE['cookie_name'];

$_SESSION['hello']="hello world";

echo $_SESSION['hello'];

 ?>