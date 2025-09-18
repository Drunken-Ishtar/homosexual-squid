<?php include 'top.html'
?>
<?php 
$con = mysql_connect('localhost','root','','comercio');
$sql = "select * from produtos";
$exe = mysqli_query($con,$sql);
while($res = mysql_fetch_array ($exe)){
    $prod_id = $res['id'];
    $pronam = $res['nomeprod'];
    $prick = $res['preco'];
    $quantity = $res['quantity'];
    echo "codigo $prod_id nome: $pronam  preco: $prick  quantidade: $quantity<br>";
}
$fecha = $sqli_close($con);
?>
<?php include 'bottom.html'
?>
