    <?php include 'top.html';?>
<?php 

    ?>
<?php
$con = mysqli_connect('localhost','root','','3d_wiki');
$sql = "select * from as_maps order by map_name ASC";
$exe = mysqli_query($con, $sql);
while ($res = mysqli_fetch_array ($exe)){
    $map = $res['id_map'];
    $map_name = $res['map_name'];
    echo"<a href='as_map?id_map=$map'>$map_name</a>"
};
?>




    <?php include 'bottom.html';?>