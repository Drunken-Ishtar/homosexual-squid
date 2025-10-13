<?php include 'top.html'
?>
<?php 
    if(empty($_SESSION['username'])) {
        header('location:login.php');
    };
    ?>
<?php 
$team_name = $_GET['team_name'];
$team_player = $_GET['team_player'];
$con=mysqli_connect('localhost','root','','3d_wiki');
$sql = "insert into as_teams (team_name,team_player) values('$team_name', '$team_player')";         
$exe = mysqli_query($con, $sql);
if ($exe){
    echo"it worked, go back <a href='aschar.php'>as_character</a>";
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>
