<?php include 'top.html'
?>
<?php
$con=mysqli_connect('localhost','root','','comercio');
$sql = "create table clientes( clientid int(8) NOT NULL primary key AUTO_INCREMENT,
    nomeclient varchar(35) NOT NULL,
    cpf integer(11) NOT NULL,
    email varchar(35) NOT NULL,
    celular integer(8) NOT NULL,
    rua varchar(35) NOT NULL,
    bairro varchar(35) NOT NULL,
    cep integer(8) NOT NULL,
    cidade varchar(35) NOT NULL,
    estado varchar(35) NOT NULL)";        
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

