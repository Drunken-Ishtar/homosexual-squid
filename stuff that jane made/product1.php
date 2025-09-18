<?php include 'top.html'
?>

        <h1>product</h1>
        <form action="product.php" enctype="multipart/form-data" method="POST">
            <label>product name</label>
            <input type="text" name="nomeprod"><br>
             
            <label>adicionar imagem</label>
            <input name="foto" type="file" /><br><br>
            <label>preço da compra</label>
            <input type="text"name="preco"><br>
            <label>margem de lucro</label>
            <input type="text"name="margemlucro"><br>
            <label>quantidade</label>
            <input type="text"name="quantity"><br>
            <label>marca</label>
            <select name="marca">
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'comercio');
            $sql = "select * from marcas order by nome_marca asc";
            $exe = mysqli_query($con, $sql);
            while($r = mysqli_fetch_array($exe)){
                $id = $r['id_mar'];
                $nome = $r['nome_marca'];
                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select><br> 
            <input type="submit" value="ver resullpwatod">      
        </form>
        <?php include 'bottom.html'
        ?>
        