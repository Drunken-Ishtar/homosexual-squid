<?php
$con = mysqli_connect('localhost','root','','thebigsecond');
    $id_chara = $_GET['id_chara'];
    $sql="delete from as_character where id_chara=$id_chara";
    $exe = mysqli_query($con, $sql);
if ($exe){
    header("location:aschar.php");
}
else{
    echo"1x1x1x1 done fucked something up";
}
$fecha=mysqli_close($con);
?>