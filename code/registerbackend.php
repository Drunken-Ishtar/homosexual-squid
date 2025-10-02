    <?php include 'top.html';
        if(!empty($_SESSION['username'])) {
        header('location:index.php');
    }; ?>
<?php
$username=$_POST['username'];
$password_db = password_hash($_POST['password'], PASSWORD_DEFAULT);

?>






<?php include 'bottom.html';?>