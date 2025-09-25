<?php include 'top.html';
session_start();


$con=mysqli_connect('localhost','root','','3d_wiki');
$username=$_POST['username'];
$password = $_POST['password'];
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$sql = "select * from users where username like '$username' and password = '$password'";
$exe=mysqli_query($con,$sql);
$r = mysqli_fetch_array($exe);
mysqli_close($con);

if ($r['username']!=NULL){
    $_SESSION ['username'] = $r['username'];
    $_SESSION ['id_user'] = $r['id_user'];
    $_SESSION ['user_type'] = $r['user_type'];
    echo"IT FUCKING WORKED!!!!";
}
else{
    echo"login and/or password is wrong";
}
include 'bottom.html'
?>
