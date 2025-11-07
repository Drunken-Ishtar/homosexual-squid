
<?php 
$id_chara = $_GET['id_chara'];
$chara_name = $_GET['chara_name'];
$chara_hp = $_GET['chara_hp'];
$chara_ws = $_GET['chara_ws'];
$chara_rs = $_GET['chara_rs'];
$chara_desc = $_GET['chara_desc'];
$chara_lore = $_GET['chara_lore'];
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "update as_character set chara_name = '$chara_name',chara_hp = '$chara_hp',chara_ws = '$chara_ws',chara_rs = '$chara_rs',chara_desc = '$chara_desc',chara_lore = '$chara_lore'where id_chara=$id_chara";         
$exe = mysqli_query($con, $sql);
if ($exe){
    header("location:ascharacter.php?id_chara=$id_chara");
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>

