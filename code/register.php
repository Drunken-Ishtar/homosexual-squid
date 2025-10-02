    <?php include 'top.html';
        if(!empty($_SESSION['username'])) {
        header('location:index.php');
    }; ?>
  <form action='registerbackend.php'>
            <label>username</label><br>
            <input type='text' name='username'><br>
            <label>password</label><br>
            <input type='text'name='password'><br> 
            <input type='submit' value='register'>      
        </form>

<?php include 'bottom.html';?>