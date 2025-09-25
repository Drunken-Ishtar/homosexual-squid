<?php include 'top.html'
session_start();
  if(empty($_SESSION['username'])) {
        header('location:login.php');
    };
?>
