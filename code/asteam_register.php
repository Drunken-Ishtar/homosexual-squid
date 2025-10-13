
<?php  include 'top.html';
session_start();

    if(empty($_SESSION['username'])) {
        header('location:login.php');
    };
    
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
<h1>teams    <form action='asteam_register1.php'>
            <label>team_name</label>
            <input type='text' name='team_name'><br>
            team player <select name="team_player">
            <?php 
                $sql1 = "SELECT * FROM users order by username asc";
                $con=mysqli_connect('localhost','root','','3d_wiki');
                $exe1 = mysqli_query($con, $sql1);
                $r = mysqli_fetch_array($exe);
                while($r = mysqli_fetch_array($exe1)){
                    $id_user = $r['id_user'];
                    $username = $r['username'];
                    if($r['team_player'] == $username){
                        $aux = "selected";
                    }
                    else{
                        $aux = "";
                    }
                    echo "<option $aux value='$username'>$username</option><br>";
                }
            ?>
            <input type='submit' value='add player to team'>      
        </form>
</html>
   <?php
    include 'bottom.html'
    ?>
