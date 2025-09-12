<?php include 'top.html'
?>
<?php 
$map_name = $_GET['map_name'];
$map_desc = $_GET['map_desc'];
$mapsfolder = 'map_img/';
$map_image = basename($_FILES['map_image']['map_name']);
$arq = $mapsfolder.$map_image;
if (move_uploaded_file($_FILES['map_image']['name'], $arq)) {
    echo "Arquivo válido e enviado com sucesso.\n";
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "insert into as_map (map_name,map_desc,map_image) values('$map_name', '$map_desc', '$map_image')";         
$ins = mysqli_query($con, $sql);
    if($ins){
        echo "ok";
    }
    else{
        echo "erro";
        unlink($arq);
    }
    mysqli_close($con);
}
$exe = mysqli_query($con, $sql);
if ($exe){
    echo"it worked, go back <a href='aschar.php'>as_character</a>";
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>
