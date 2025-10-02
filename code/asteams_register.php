
<?php  include 'top.html';
session_start();

    if(empty($_SESSION['username'])) {
        header('location:login.php');
    };
    
if (!empty($_SESSION['username']))
$con2=mysqli_connect('localhost','root','','3d_wiki');
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
<h1>maps</h1>
        <form action='asteams_register1.php'>
            <label>team_name</label>
            <input type='text' name='team_name'><br>
            <label>player</label>
            <input type='text'name='team_player'><br> 
            <?PHP //echo"<label>team_image</label>
            //<input type='file'name='team_image'><br>"
            // add these when you figure out how to make images work?>
            <input type='submit' value='add player to team'>      
        </form>
</html>
   <?php
    include 'bottom.html'
    ?>
