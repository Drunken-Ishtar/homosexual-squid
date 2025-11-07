<?php
$con = mysqli_connect('localhost','root','','thebigsecond');
    $id_map = $_GET['id_map'];
    $sql="delete from as_map where id_map=$id_map";
    $exe = mysqli_query($con, $sql);
if ($exe){
    header("location:as_maps.php");
}
else{
    echo"1x1x1x1 done fucked something up";
}
$fecha=mysqli_close($con);
?>