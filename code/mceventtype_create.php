<?php include 'top.html'
session_start();
  if(empty($_SESSION['username'])) {
        header('location:login.php');
    };
?>

        <h1>event type</h1>
        <form action="mceventtype_register.php">
            <label>nome</label>
            <input type="text"name="mctype_name"><br>
            <input type="submit" value="ver resullpwatod">      
        </form>
        <?php include 'bottom.html'
        ?>
        