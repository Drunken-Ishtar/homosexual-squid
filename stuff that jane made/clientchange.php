<?php include 'top.html';
$con=mysqli_connect('localhost','root','','comercio');
$clientid = $_GET['clientid'];
$sql = "select * from clientes where clientid=$clientid";

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
    <form action='clientchange2.php'>
        <label>id</label>
        <input readonly type='text'name='clientid' value=<?php echo "$r[clientid]"; ?>><br>
        <label>name</label>
        <input type='text'name='nomecliente' value=<?php echo "$r[nomeclient]"; ?>><br>
        <label>cpf</label>
        <input type='text'name='cpfe' value=<?php echo "$r[cpf]"; ?>><br> 
        <label>email</label>
        <input type='text'name='emaile' value=<?php echo "$r[email]"; ?>><br>
        <label>senha</label>
        <input type='text'name='senhae' value=<?php echo "$r[senha]"; ?>><br>
        <label>celular</label>
        <input type='text'name='celulare' value=<?php echo "$r[celular]"; ?>><br> 
        <label>rua</label>
        <input type='text'name='ruae' value=<?php echo "$r[rua]"; ?>><br> 
        <label>bairro</label>
        <input type='text'name='bairroe' value=<?php echo "$r[bairro]"; ?>><br> 
        <label>cep</label>
        <input type='text'name='cepe' value=<?php echo "$r[cep]"; ?>><br> 
        <label>cidade</label>
        <input type='text'name='cidadee' value=<?php echo "$r[cidade]"; ?>><br> 
        <label>estado</label>
        <select>
        <?php
        $sql2 = "select * from estado order by nome_estado asc";
        $exe2 = mysqli_query($con, $sql2);
        while($r2 = mysqli_fetch_array($exe2)){
                $id_est = $r2['id_est'];
                $nome_estado = $r2['nome_estado'];
                if($r['estado'] == $id_est){
                    $aux = "selected";
                }
                else{
                    $aux = "";
                }
                echo "<option $aux value=$id_est>$nome_estado</option>";
            }
            mysqli_close($con);
            ?>

        </select><br>  
        <input type='submit' value='ver resullpwatod'>
</body>
<?php include 'bottom.html'
?>