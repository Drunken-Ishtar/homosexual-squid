<?php include 'top.html'
?>        <h1>client</h1>
        <form action='clientregister.php'>
            <label>name</label>
            <input type="text" name="nomeclient"><br>
            <label>cpf</label>
            <input type="text"name="cpf"><br> 
            <label>email</label>
            <input type="text"name="email"><br>
            <label>senha</label>
            <input type="text"name="senha"><br>
            <label>celular</label>
            <input type="text"name="celular"><br> 
            <label>rua</label>
            <input type="text"name="rua"><br> 
            <label>bairro</label>
            <input type="text"name="bairro"><br> 
            <label>cep</label>
            <input type="text"name="cep"><br> 
            <label>cidade</label>
            <input type="text"name="cidade"><br> 
            <select name="estado">
            <label>estado</label>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'comercio');
            $sql = "select * from estado order by nome_estado asc";
            $exe = mysqli_query($con, $sql);
            while($r = mysqli_fetch_array($exe)){
                $id = $r['id_est'];
                $nome = $r['nome_estado'];
                echo "<option value='$id'>$nome</option>";
            }
            mysqli_close($con);
            ?>
        </select><br> 
            <input type="submit" value="ver resullpwatod">      
        </form>
<?php include 'bottom.html'
?>
