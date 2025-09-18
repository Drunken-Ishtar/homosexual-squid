<?php include 'top.html'
?>
<?php 
$estado = $_GET['estado'];
$con=mysqli_connect('localhost','root','','comercio');
$sql = "insert into estado (nome_estado) values('$estado')";         
$exe = mysqli_query($con, $sql);
if ($exe){
    echo"works :)";
}
else{
    echo"1x1x1x1 done fucked something up";
}
$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>

