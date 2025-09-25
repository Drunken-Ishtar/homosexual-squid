<?php include 'top.html';?>
<?php 
session_start();

    if(empty($_SESSION['username'])) {
        header(location:'login.php');
    };
    ?>
<?php
$con = mysqli_connect('localhost','root','','3d_wiki');
$sql = "select * from mc_events order by id_mcevent ASC";
$exe = mysqli_query($con, $sql);
echo"<a href='mcevent_create.php'>add an event</a><br>";
while ($res = mysqli_fetch_array ($exe)){
    $id_mcevent = $res['id_mcevent'];
    $mcevent_name = $res['mcevent_name'];
    $mcevent_desc = $res['mcevent_desc'];
    $mcevent_type = $res['mcevent_type'];
    $mcevent_start = $res['mcevent_start'];
    $mcevent_end = $res['mcevent_end'];
    echo"id = $id_mcevent, name=$mcevent_name, description=$mcevent_desc, type=$mcevent_type, start date=$mcevent_start, end date=$mcevent_end";
    echo"<a href='mcevent_remover.php?id_mcevent=$id_mcevent'>remove</a>|<a href='mcevent_edit.php?id_mcevent=$id_mcevent'>edit</a><br>";
    }
?>
<?php include 'bottom.html'
?>