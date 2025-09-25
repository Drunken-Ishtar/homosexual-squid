<?php include 'top.html'
?>
<?php
    $con = mysqli_connect('localhost','root','','thebigsecond');
    $id_chara = $_GET['id_chara'];
    $sql="delete from as_character where id_chara=$id_chara";
    $exe = mysqli_query($con, $sql);
if ($exe){
    echo"works :), go back <a href='aschar.php'>as_character</a>";
}
else{
    echo"1x1x1x1 done fucked something up";
}
$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>