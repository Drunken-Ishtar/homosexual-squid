<?php include 'top.html'
session_start();
  if(empty($_SESSION['username'])) {
        header(location:'login.php');
    };
?>

<?php
$con = mysqli_connect('localhost','root','','3d_wiki');
$sql = "select * from mc_eventtype order by id_mctype ASC";
$exe = mysqli_query($con, $sql);
echo"<a href='mceventtype_create.php'>add an event type</a><br>";
while ($res = mysqli_fetch_array ($exe)){
    $id_mctype = $res['id_mctype'];
    $mctype_name = $res['mctype_name'];
    echo"id = $id_mctype, name=$mctype_name";
    echo"<a href='mctype_remover.php?id_mctype=$id_mctype'>remove</a>|<a href='mctype_edit.php?id_mctype=$id_mctype'>edit</a><br>";
    }
?>
<?php include 'bottom.html'

?>