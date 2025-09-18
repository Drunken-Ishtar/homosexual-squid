<?php include 'top.html'
?>
<?php
$clientid = $_GET['clientid'];
$nomecliente = $_GET['nomecliente'];
$cpfe = $_GET['cpfe'];
$emaile = $_GET['emaile'];
$senhae = $_GET['senhae'];
$celulare = $_GET['celulare'];
$ruae = $_GET['ruae'];
$bairroe = $_GET['bairroe'];
$cepe = $_GET['cepe'];
$cidadee = $_GET['cidadee'];
$estadoe = $_GET['estadoe'];
$con=mysqli_connect('localhost','root','','comercio');
$sql = "update clientes set nomeclient = '$nomecliente',cpf = '$cpfe',email = '$emaile',senha = '$senhae',celular = '$celulare',rua = '$ruae',bairro = '$bairroe',cep = '$cepe',cidade = '$cidadee',estado = '$estadoe' where clientid=$clientid";         
$exe = mysqli_query($con, $sql);
echo "$sql<br>";
if ($exe){
    echo"works :)<br> 
    <a href='clientdatabase.php>go back</a>";
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>