<?php  include 'top.html';
session_start();
if (!empty($_SESSION['username']))
$con2=mysqli_connect('localhost','root','','thebigsecond');
$sql2 = "select * from users where username like '$_SESSION[username]' and password like '$_SESSION[password]'";
$exe2=mysqli_query($con2,$sql2);
$r2 = mysqli_fetch_array($exe2);
mysqli_close($con2);
if ($r2['user_type'] != 1){
    header("location:error.html");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>minecraft events</h1>
        <form action='mcevent_register.php'>
            <label>name</label>
            <input type='text' name='mcevent_name'><br>
            <label>description</label>
            <input type='text'name='mcevent_desc'><br> 
           
            
            <label>start date</label>
            <input type='date'name='mcevent_start'><br>
            <label>end date</label>
            <input type='date'name='mcevent_end'><br>
            event type <select name="mcevent_type">
            <?php 
                $sql1 = "SELECT * FROM mc_eventtype order by id_mctype asc";
                $con=mysqli_connect('localhost','root','','thebigsecond');
                $exe1 = mysqli_query($con, $sql1);
                $r = mysqli_fetch_array($exe);
                while($r = mysqli_fetch_array($exe1)){
                    $id_mctype = $r['id_mctype'];
                    $mctype_name = $r['mctype_name'];
                    if($r['mcevent_type'] == $id_mctype){
                        $aux = "selected";
                    }
                    else{
                        $aux = "";
                    }
                    echo "<option $aux value='$id_mctype'>$mctype_name</option><br>";
                }
            ?>
            
            <input type='submit' value='ver resullpwatod'>      
        </form>
</html>
   <?php
    include 'bottom.html'
    ?>
