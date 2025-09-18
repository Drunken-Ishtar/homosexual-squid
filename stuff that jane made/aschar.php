<?php include 'top.html'
?>
<?php
$id = $_POST['id']

$con = mysqli_connect('localhost','root','','thebigsecond');
$sql = "select * from as_character asch, join as_weapon asw on asch.id_chara = asw.idchara where asch.id_chara = $id order by asch.id_chara ASC";
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
    $weapon_name = $res['weapon_name']
    echo" <div>
                <ul>
                    <li>name=$chara_name</li>
                    <li>hp=$chara_hp</li> 
                    <li>walkspeed=$chara_ws<li>
                    <li>runspeed=$chara_rs<li>
                    <li>primary=<a href='asweapon.php?id=$chara_primary'>$weapon_name</a></li>
                    <li>secondary=<a href='asweapon.php?id=$chara_secondary'>$weapon_name</a></li> 
                </ul>
            </div>
            <div>
            $Chara_desc,
            </div>
            <div>
            $chara_lore;
            </div>"
    echo"<a href='asCharacter_remover.php?id_chara=$id_chara'>remove</a>|<a href='ascharacter_edit.php?id_chara=$id_chara'>edit</a><br>";
    }
?>
<?php include 'bottom.html'
?>

/* needs testing */