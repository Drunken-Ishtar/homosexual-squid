<?php include 'top.html'
session_start();
  if(empty($_SESSION['username'])) {
        header(location:'login.php');
    };
if (!empty($_SESSION['username']))
$con=mysqli_connect('localhost','root','','thebigsecond');
$sql = "select * from users where username like '$_SESSION[username]' and password like '$_SESSION[password]'";
$exe=mysqli_query($con,$sql);
$r2 = mysqli_fetch_array($exe);
mysqli_close($con);
if ($r2['user_type'] != 1){
    header("location:error.html");
}
echo"hello this is the admin testing zone";

include 'bottom.html';
?>