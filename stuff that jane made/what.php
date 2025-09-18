<?php
    include "valida_sessão.php";
    include "top.php";

    $con = mysqli_connect();
    $sql="select * from produtos order by nome asc";
    $exe=mysqli_query($con,$sql);
    echo"<div class='container'>";
    while($r = mysqli_fetch_array($exe)){
        $id=$r['$id'];
        $nome=$r['nome'];
        $preco=$r['preco'];
        echo "<div>$nome<br> $preco<br>
        <a href ='detalhes.php? id=$id'> detalhes </a> <br>
        <a href='addcarrinho.php?id=$id'> comprar </a> </div>";
    }
    echo "<div>";
    mysqli_close($con);
    include "bottom.php";
?>