<?php  include 'top.html';
session_start();


session_destroy();

header(location:'index.php');
?>