<?php include 'top.html'
?>
<?php 
$asnote_name = $_GET['asnote_name'];
$asnote_note = $_GET['asnote_note'];
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "insert into as_patchnotes (asnote_name,asnote_note) values('$asnote_name', '$asnote_note')";         
$exe = mysqli_query($con, $sql);
echo"$sql";
if ($exe){
    header("location:aspatchnotes.php");
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>
