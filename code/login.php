<?php include 'top.html';
session_start();
$username = $_POST['username'];
$password =$_POST['password'];

$con=mysqli_connect('localhost','root','','3d_wiki');
//grab users and stuff here 
 $sql = "select * from users where username like '$username'";
 $exe=mysqli_query($con,$sql);
 $r = mysqli_fetch_array($exe);
 $password_db = $r['password'];
if (password_verify($password, $password_db)){ 
    //log in here
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $sql = "select * from users where username like '$username' and password = '$password'";
    $exe=mysqli_query($con,$sql);
    $r = mysqli_fetch_array($exe);
   
}
else {
    header('location:logon.php');
    session_abort();
}
 mysqli_close($con);
if ($r['username']!=NULL){
    $_SESSION ['username'] = $r['username'];
    $_SESSION ['id_user'] = $r['id_user'];
    $_SESSION ['user_type'] = $r['user_type'];
    header('location:index.php');
}
else{
    echo"login and/or password is wrong";
   header('location:logon.php');
}
include 'bottom.html'
?>
