<?php  include 'top.html';
session_start();

    if(empty($_SESSION['username'])) {
        header('location:login.php');
    };
$idmap = $_GET['id_map']
$con2=mysqli_connect('localhost','root','','3d_wiki');
$sql2 = "select * from as_map where id_map = $idmap";
$exe2=mysqli_query($con2,$sql2);
while ($res = mysqli_fetch_array ($exe2)){
    $map_name = $res['map_name'];
    $map_desc = $res['map_desc'];
    $map_image = $res['map_image'];
};
mysqli_close($con2);
?>



