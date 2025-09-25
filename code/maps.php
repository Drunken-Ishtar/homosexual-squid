    <?php include 'top.html';?>
<?php 
session_start();

    if(empty($_SESSION['username'])) {
        header(location:'login.php');
    };
    ?>





    <?php include 'bottom.html';?>