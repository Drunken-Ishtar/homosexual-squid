<?php include 'top.html'
?>
<?php
$con = mysqli_connect('localhost','root','','comercio');
$sql = "select * from clientes, estado where clientes.estado = estado.id_est order by nomeclient ASC";
$exe = mysqli_query($con, $sql);
echo"<a href='client.php'>adicionar um cliente</a><br>";
echo"<a href='estado1.php'>adicionar um esado</a><br>";
while ($res = mysqli_fetch_array ($exe)){
    $clientid = $res['clientid'];
    $nomeclient = $res['nomeclient'];
    $cpf = $res['cpf'];
    $email = $res['email'];
    $senha = $res['senha'];
    $celular = $res['celular'];
    $rua = $res['rua'];
    $bairro = $res['bairro'];
    $cep = $res['cep'];
    $cidade = $res['cidade'];
    $estado = $res['estado'];
    echo"code = $clientid, nome=$nomeclient, cpf=$cpf, email=$email, senha=$senha, numero celular=$celular, rua=$rua, bairro=$bairro,cep=$cep,cidade=$cidade,estado=$estado"; echo"<a href='client_remover.php?clientid=$clientid'>remover</a>|<a href='clientchange.php?clientid=$clientid'>editar</a><br>";
    }
?>
<?php include 'bottom.html'
?>
