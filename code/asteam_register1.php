<?php include 'top.html'
?>
<?php 
$team_name = $_GET['team_name'];
$team_player = $_GET['team_player'];
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "insert into as_teams (team_name,team_player) values('$team_name', '$team_player')";         
$exe = mysqli_query($con, $sql);
echo"$sql";
if ($exe){
    header("location:asteam.php");
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>
