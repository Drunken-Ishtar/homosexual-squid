<?php include 'top.html'
?>
<?php 
$marca = $_GET['marca'];
$con=mysqli_connect('localhost','root','','comercio');
$sql = "insert into marcas (nome_marca) values('$marca')";         
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

