<?php include 'top.html'; 
if(!empty($_SESSION['username'])) {
        header('location:index.php');
    }; ?>

<form action ='login.php' method='POST'>
    user<input type='text' name ='username'>
    password<input type='password' name='password'>
    <input type='submit'>
</form>

    <?php include 'bottom.html';?>
