<?php include 'top.html';
session_start();
  if(empty($_SESSION['username'])) {
        header('location:login.php');
    };
?>

<?php
$con = mysqli_connect('localhost','root','','3d_wiki');
$sql = "select * from as_teams order by team_name ASC";
$exe = mysqli_query($con, $sql);
echo"<a href='asteamsregister.php'>add a character</a><br>";
while ($res = mysqli_fetch_array ($exe)){
    $id_asteam = $res['id_asteam'];
    $team_name = $res['team_name'];
    $team_player = $res['team_player'];
    echo"id = $id_asteam, team name=$team_name, player name=$team_player";
    echo"<a href='asteam_remover.php?id_asteam=$id_asteam'>remove</a>|<a href='asteam_edit.php?id_asteam=$id_asteam'>edit</a><br>";
    }
?>
<?php include 'bottom.html'
?>