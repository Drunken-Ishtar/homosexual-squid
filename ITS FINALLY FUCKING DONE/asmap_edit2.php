
<?php 
$id_map = $_GET['id_map'];
$map_name = $_GET['map_name'];
$map_desc = $_GET['map_desc'];
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "update as_map set map_name = '$map_name',map_desc = '$map_desc'where id_map=$id_map";         
$exe = mysqli_query($con, $sql);
if ($exe){
    header("location:asmap.php?id_map=$id_map");
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>

