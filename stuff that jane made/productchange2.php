<?php include 'top.html'
?>
<?php
$prod_id = $_GET['prod_id'];
$nomeprod = $_GET['nomeprod'];
$marca = $_GET['marca'];
$preco = $_GET['preco'];
$margemlucro = $_GET['margemlucro'];
$quantity = $_GET['quantity'];
$con=mysqli_connect('localhost','root','','comercio');
$sql = "update produtos set nomeprod = '$nomeprod',marca = '$marca',preco = '$preco',margemlucro = '$margemlucro', quantity = '$quantity' where prod_id=$prod_id";         
$exe = mysqli_query($con, $sql);
echo "$sql<br>";
if ($exe){
    echo"works :)<br>";
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>
