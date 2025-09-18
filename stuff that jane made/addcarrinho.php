<?php 
    include "valida_sessao.php";
    include "topo.php";
    $idprod=$_GET['id'];
    $con=mysqli_connect();

    $sql="insert into carrinho (idcli,idprod) values ($idcli,$idprod)";
    $exe=mysqli_query($con,$sql);
    if($exe){
        echo "adicionar ao carrinho";
    }
    else{
        echo"erro";
    }
    mysqli_close($con);
    include "bottom.html";
?>