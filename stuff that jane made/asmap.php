
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
<h1>maps</h1>
        <form action='asmap_register.php'>
            <label>name</label>
            <input type='text' name='map_name'><br>
            <label>description</label>
            <input type='text'name='map_desc'><br> 
            <label>image</label>
            <input type='file'name='map_image'><br>
            <input type='submit' value='add map'>      
        </form>
</html>
   <?php
    include 'bottom.html'
    ?>
