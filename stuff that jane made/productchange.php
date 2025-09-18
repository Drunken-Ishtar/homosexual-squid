<?php include 'top.html';
$prod_id = $_GET['prod_id'];
$con=mysqli_connect('localhost','root','','comercio');
$sql = "select * from produtos where prod_id=$prod_id";         
$exe = mysqli_query($con, $sql);
$r = mysqli_fetch_array($exe);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action='productchange2.php'>
            <label>id</label>
            <input readonly type='text'name='prod_id' value=<?php echo "$r[prod_id]"; ?>><br>
            <label>name</label>
            <input type='text'name='nomeprod' value=<?php echo "$r[nomeprod]"; ?>'><br>
            <label>marca</label>
            <?php
        $sql2 = "select * from marcas order by nome_marca asc";
        $exe2 = mysqli_query($con, $sql2);
        while($r2 = mysqli_fetch_array($exe2)){
                $id_mar = $r['id_mar'];
                $nome_marca = $r2['nome_marca'];
                if($rel['marca'] == $id_mar){
                    $aux = "selected";
                }
                else{
                    $aux = "";
                }
                echo "<option $aux value=$id_mar>$nome_marca</option>";
            }
            mysqli_close($con);
            ?>
            </select><br> 
            <label>preço</label>
            <input type='text'name='preco' value=<?php echo "$r[preco]"; ?>><br>
            <label>margem de lucro</label>
            <input type='text'name='margemlucro' value=<?php echo "$r[margemlucro]"; ?>><br>
            <label>quantity</label>
            <input type='text'name='quantity' value=<?php echo "$r[quantity]"; ?>><br> 
            <input type='submit' value='ver resullpwatod'>
        </body>
    <?php
if ($exe){
    echo"works :)<br>";
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html';
?>
