<?php include 'top.html'
?>
<?php 
$mcevent_name = $_GET['mcevent_name'];
$mcevent_desc = $_GET['mcevent_desc'];
$mcevent_type = $_GET['mcevent_type'];
$mcevent_start = $_GET['mcevent_start'];
$mcevent_end = $_GET['mcevent_end'];
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "insert into mc_events (mcevent_name,mcevent_desc,mcevent_type,mcevent_start,mcevent_end) values('$mcevent_name', '$mcevent_desc', '$mcevent_type', '$mcevent_start', '$mcevent_end')";         
$exe = mysqli_query($con, $sql);
echo"$sql";
if ($exe){
    echo"it worked, go back <a href='mcevent.php'>minecrat events</a>";
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>
