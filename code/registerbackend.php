    <?php include 'top.html';
        if(!empty($_SESSION['username'])) {
        header('location:index.php');
    }; ?>
<?php
$username=$_POST['username'];
$password_db = password_hash($_POST['password'], PASSWORD_DEFAULT);
$con=mysqli_connect('localhost','root','','3d_wiki');
$sql = "insert into users () values()";         
$exe = mysqli_query($con, $sql);
if (!$exe) {
    header('location:error.php');
} 
echo "registered succesfully <br>";
// put something here later to redirect the user echo ""
?>






<?php include 'bottom.html';?>