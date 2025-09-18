
<?php include 'top.html'
$nomeprod = $_POST['nomeprod'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$margemlucro = $_POST['margemlucro'];
$quantity = $_POST['quantity'];
$pasta = 'imagens/';
$foto = basename($_FILES['foto']['name']);
$arq = $pasta.$foto;
if (move_uploaded_file($_FILES['foto']['tmp_name'], $arq)) {
    echo "Arquivo válido e enviado com sucesso.\n";
$con=mysqli_connect('localhost','root','','comercio');
$sql = "insert into produtos (nomeprod,marca,preco,margemlucro,quantity,imgprod) values('$nomeprod', '$marca', '$preco', '$margemlucro', '$quantity','$foto')";         
$ins = mysqli_query($con, $sql);
    if($ins){
        echo "ok";
    }
    else{
        echo "erro";
        unlink($arq);
    }
    mysqli_close($con);
} else {
    echo "Possível ataque de upload de arquivo!\n";
}
$fecha=mysqli_close($con);
include 'bottom.html'
?>
