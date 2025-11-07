<?php include 'top.html'
?>
<?php 
$map_name = $_GET['map_name'];
$map_desc = $_GET['map_desc'];
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "insert into as_map (map_name,map_desc) values('$map_name', '$map_desc')";         
$exe = mysqli_query($con, $sql);
if ($exe){
    header("location:as_maps.php");
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>
