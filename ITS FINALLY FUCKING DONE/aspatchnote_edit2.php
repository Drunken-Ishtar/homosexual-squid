
<?php 
$id_asnote = $_GET['id_asnote'];
$asnote_name = $_GET['asnote_name'];
$asnote_note = $_GET['asnote_note'];
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "update as_patchnotes set asnote_name = '$asnote_name',asnote_note = '$asnote_note'where id_asnote=$id_asnote";         
echo"$sql";
$exe = mysqli_query($con, $sql);

if ($exe){
    header("location:patchednotes.php?id_asnote=$id_asnote");
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>

