<?php include 'top.html'
?>
<?php 
$nomeclient = $_GET['nomeclient'];
$cpf = $_GET['cpf'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$celular = $_GET['celular'];
$rua = $_GET['rua'];
$bairro = $_GET['bairro'];
$cep = $_GET['cep'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$con=mysqli_connect('localhost','root','','comercio');
$sql = "insert into clientes (nomeclient,cpf,email,senha,celular,rua,bairro,cep,cidade,estado) values('$nomeclient', '$cpf', '$email', '$senha', '$celular','$rua','$bairro','$cep','$cidade','$estado')";         
$exe = mysqli_query($con, $sql);
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
