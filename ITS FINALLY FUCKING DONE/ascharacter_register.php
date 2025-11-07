
<?php 
$chara_name = $_GET['chara_name'];
$chara_hp = $_GET['chara_hp'];
$chara_ws = $_GET['chara_ws'];
$chara_rs = $_GET['chara_rs'];
$chara_desc = $_GET['chara_desc'];
$chara_lore = $_GET['chara_lore'];
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "insert into as_character (chara_name,chara_hp,chara_ws,chara_rs,chara_desc,chara_lore)
 values('$chara_name', '$chara_hp', '$chara_ws', '$chara_rs','$chara_desc','$chara_lore')";         
$exe = mysqli_query($con, $sql);
if ($exe){
    header("location:aschar.php");
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>

