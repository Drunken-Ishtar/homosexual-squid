<?php
    session_start();
    if(!$_SESSION['id']){
        Header("location:login.html");
    }
    include "top.html";
    $id=$_SESSION['id'];
    $sql = "select * from carrinho, produtos where carrinho.idcli = $id and carrinho.idprod = produtos.idprod order by produtos.nomeprod";

    $con=mysqli_connect();
    $total=0;
    while ($r=mysqli_fetch_array($exe)){
        $idcar = $r ['idcar'];
        $nomeprod = $r['nomeprod'];
        $precoprod = $r['precoprod'];
        echo "<div> $nomeprod $precoprod
        <a href='delcar.php? idcar=$idcar'>retirar</a></div>";
        $total += $precoprod;
    }
    echo "<div>total:$total</div>";
    mysqli_close($con);
?>