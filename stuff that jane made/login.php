<?php include 'top.html'
session_start()

$con=mysqli_connect('localhost','root','','comercio');
$clientid = $_GET['clientid'];
$login=$_POST['login'];
$senha = $_POST['senha']
$sql = "select * from clientes where login like '$login' and senha like '$senha'";
$exe=mysqli_query($con,$sql);
$r = mysqli_fetch_array($exe);
mysqli_close($con);

if ($r['nome']!=NULL){
    $_SESSION ['nome'] = $r['nome'];
    $_SESSION ['clientid'] = $r['clientid'];
    $_SESSION ['tipo'] = $r['tipo'];
    header('location:main.php');
}

else{
    echo"login and/or password is wrong";
}

include 'bottom.html'
?>
