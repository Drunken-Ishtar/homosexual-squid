<?php include 'top.html'
session_start();
  if(empty($_SESSION['username'])) {
        header(location:'login.php');
    };
?>

<?php
$con = mysqli_connect('localhost','root','','thebigsecond');
$sql = "select * from as_character order by id_chara ASC";
$exe = mysqli_query($con, $sql);
echo"<a href='ascharcreate.php'>add a character</a><br>";
while ($res = mysqli_fetch_array ($exe)){
    $id_chara = $res['id_chara'];
    $chara_name = $res['chara_name'];
    $chara_hp = $res['chara_hp'];
    $chara_ws = $res['chara_ws'];
    $chara_rs = $res['chara_rs'];
    $chara_primary = $res['chara_primary'];
    $chara_secondary = $res['chara_secondary'];
    $Chara_desc = $res['chara_desc'];
    $chara_lore = $res['chara_lore'];
    echo"id = $id_chara, name=$chara_name, hp=$chara_hp, walkspeed=$chara_ws, runspeed=$chara_rs, primary=$chara_primary,
    secondary=$chara_secondary, description=$Chara_desc, lore=$chara_lore";
    echo"<a href='asCharacter_remover.php?id_chara=$id_chara'>remove</a>|<a href='ascharacter_edit.php?id_chara=$id_chara'>edit</a><br>";
    }
?>
<?php include 'bottom.html'
?>