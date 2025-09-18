<?php  include 'top.html';
session_start();
if (!empty($_SESSION['username']))
$con2=mysqli_connect('localhost','root','','thebigsecond');
$sql2 = "select * from users where username like '$_SESSION[username]' and password like '$_SESSION[password]'";
$exe2=mysqli_query($con2,$sql2);
$r2 = mysqli_fetch_array($exe2);
mysqli_close($con2);
if ($r2['user_type'] != 1){
    header("location:error.html");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>characters</h1>
        <form action='character_register.php'>
            <label>name</label>
            <input type='text' name='chara_name'><br>
            <label>hp</label>
            <input type='text'name='chara_hp'><br> 
            <label>walk speed</label>
            <input type='text'name='chara_ws'><br>
            <label>run speed</label>
            <input type='text'name='chara_rs'><br>
            <label>primary</label>
            <input type='text'name='chara_primary'><br> 
            <label>secondary</label>
            <input type='text'name='chara_secondary'><br> 
            <label>description</label>
            <input type='text'name='chara_desc'><br> 
            <label>lore</label>
            <input type='text'name='chara_lore'><br> 
            <input type='submit' value='ver resullpwatod'>      
        </form>
</html>
   <?php
    include 'bottom.html'
    ?>