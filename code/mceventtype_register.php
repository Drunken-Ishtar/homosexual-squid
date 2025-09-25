<?php include 'top.html'
session_start();
  if(empty($_SESSION['username'])) {
        header(location:'login.php');
    };
?>

<?php 
$mctype_name = $_GET['mctype_name'];
$con=mysqli_connect('localhost','root','','3d_wiki');
$sql = "insert into mc_eventtype (mctype_name) values('$mctype_name')";         
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

