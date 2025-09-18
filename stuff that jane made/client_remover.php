<?php include 'top.html'
?>
<?php
    $con = mysqli_connect('localhost','root','','comercio');
    $clientid = $_GET['clientid'];
    $sql="delete from clientes where clientid=$clientid";
    $exe = mysqli_query($con, $sql);
if ($exe){
    echo"works :)";
}
else{
    echo"1x1x1x1 done fucked something up";
}
$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>