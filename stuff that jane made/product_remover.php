<?php include 'top.html'
?>
<?php
    $con = mysqli_connect('localhost','root','','comercio');
    $prod_id = $_GET['prod_id'];
    $sql="delete from produtos where prod_id=$prod_id";
    $exe = mysqli_query($con, $sql);
if ($exe){
    echo"works :)<br>";
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>
