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
$con=mysqli_connect('localhost','root','','thebigsecond');
$id_chara = $_GET['id_chara'];
$sql = "select * from as_character where id_chara=$id_chara";
$exe = mysqli_query($con, $sql);
$r = mysqli_fetch_array($exe);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action='ascharacter_edit2.php'>
        <label>id</label>
        <input readonly type='text'name='id_chara' value=<?php echo $r['id_chara']; ?>><br>
        <label>name</label>
        <input type='text'name='chara_name' value=<?php echo $r['chara_name']; ?>><br>
        <label>hp</label>
        <input type='text'name='chara_hp' value=<?php echo $r['chara_hp']; ?>><br> 
        <label>walk speed</label>
        <input type='text'name='chara_ws' value=<?php echo $r['chara_ws']; ?>><br>
        <label>run speed</label>
        <input type='text'name='chara_rs' value=<?php echo $r['chara_rs']; ?>><br>
        <label>primary</label>
        <input type='text'name='chara_primary' value=<?php echo $r['chara_primary']; ?>><br> 
        <label>secondary</label>
        <input type='text'name='chara_secondary' value=<?php echo $r['chara_secondary']; ?>><br> 
        <label>description</label>
        <input type='text'name='chara_desc' value=<?php echo $r['chara_desc']; ?>><br> 
        <label>lore</label>
        <input type='text'name='chara_lore' value=<?php echo $r['chara_lore']; ?>><br> 
        
        <input type='submit' value='ver resullpwatod'>
</html>
   <?php
    include 'bottom.html'
    ?>
