<?php include 'top.html';?>
<?php 
session_start();

    if(empty($_SESSION['username'])) {
        header(location:'login.php');
    };
    ?>
<?php 
$mcevent_name = $_GET['mcevent_name'];
$mcevent_desc = $_GET['mcevent_desc'];
$mcevent_type = $_GET['mcevent_type'];
$mcevent_start = $_GET['mcevent_start'];
$mcevent_end = $_GET['mcevent_end'];
$con=mysqli_connect('localhost','root','','3d_wiki');
$sql = "insert into mc_events (mcevent_name,mcevent_desc,mcevent_type,mcevent_start,mcevent_end) values('$mcevent_name', '$mcevent_desc', '$mcevent_type', '$mcevent_start', '$mcevent_end')";         
$exe = mysqli_query($con, $sql);
echo"$sql";
if ($exe){
    echo"it worked, <a href='mcevent.php'>go back</a>";
}
else{
    echo"1x1x1x1 done fucked something up";
}

$fecha=mysqli_close($con);
?>
<?php include 'bottom.html'
?>
