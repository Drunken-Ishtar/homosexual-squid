<?php include 'top.html'
?>
<?php
$con = mysqli_connect('localhost','root','','comercio');
$sql = "select * from produtos, marcas where produtos.marca = marcas.id_mar order by produtos.nome ASC";
$exe = mysqli_query($con, $sql);
echo"<a href='product1.php'>adicionar um produto</a><br>";
echo"<a href='marcas1.php'>adicionar uma marca</a><br>";
while ($res = mysqli_fetch_array ($exe)){
    $prod_id = $res['prod_id'];
    $nomeprod = $res['nomeprod'];
    $marca = $res['nome_marca'];
    $preco = $res['preco'];
    $margemlucro = $res['margemlucro'];
    $quantity = $res['quantity'];
    echo"code = $prod_id, nome=$nomeprod, marca=$marca, preco=$preco, margemlucro=$margemlucro, quantity=$quantity"; echo"<a href='product_remover.php?prod_id=$prod_id'>remover</a>|<a href='productchange.php?prod_id=$prod_id'>editar</a><br>";
    }
?>    
<?php include 'bottom.html'
?>
