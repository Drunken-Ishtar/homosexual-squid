<?php
$con = mysqli_connect('localhost','root','','thebigsecond');
    $id_asnote = $_GET['id_asnote'];
    $sql="delete from as_patchnotes where id_asnote=$id_asnote";
    $exe = mysqli_query($con, $sql);
if ($exe){
    header("location:aspatchnotes.php");
}
else{
    echo"1x1x1x1 done fucked something up";
}
$fecha=mysqli_close($con);
?>