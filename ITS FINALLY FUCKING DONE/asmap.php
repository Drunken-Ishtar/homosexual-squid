
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>hell on my computer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <ul class="nav absolute flex justify-between p-5 text-white bg-black w-screen">
        <div class="flex space-x-2">
            <li><a href="index.php">main</a></li>
            <li><a href="about.php">about</a></li>
        </div>
        <h1>www.3dwiki.com</h1>
        <li>
        <?php
             if(empty($_SESSION['username'])) {
                echo"<a href='logon.html'>log in</a>";
            }else{
                echo"$_SESSION[username]";
            }
        ?></a></li>

    </ul>

    <section class="flex justify-between">
        <nav class="bg-[url(./assets/img/as_bg.jpg)] h-screen w-screen bg-cover">
            <ul class="p-20">
                <h1 class="text-3xl">maps</h1>
                <?php
                    $con = mysqli_connect('localhost','root','','thebigsecond');
                    $id_map = $_GET['id_map'];
                    $sql = "select * from as_map where id_map = $id_map";
                    $exe = mysqli_query($con, $sql);
                    while ($res = mysqli_fetch_array ($exe)){
                        $id_map = $res['id_map'];
                        $map_name = $res['map_name'];
                        $map_desc = $res['map_desc'];
                    }

                        echo"<div class='bg-black p-4 text-white rounded-lg opacity-70 flex flex-col'>    
                            <p>
                            name : $map_name <br>
                            description : $map_desc <br>
                            </p>

                        </div><br>";

                        
                        echo"<a href='asmap_edit.php?id_map=$id_map'
                            class='bg-black p-4 text-white rounded-lg opacity-70 flex flex-col'>    
                            <p>edit</p>
                            </a>";
                        echo"<a href='asmap_remover.php?id_map=$id_map'
                            class='bg-black p-4 text-white rounded-lg opacity-70 flex flex-col'>    
                            <p>deleta</p>
                            </a>";
                ?>
            </ul>
        </nav>
    </section>
<footer class=" absolute bottom-0 w-screen text-center  text-white bg-black">
  <p>2025 bnuuy inc.</p>
</footer>

</body>
</html><?php include 'top.html';
session_start();
  if(empty($_SESSION['username'])) {
        header('location:login.php');
    };
?>

<?php
$con = mysqli_connect('localhost','root','','thebigsecond');
$sql = "select * from as_teams order by team_name ASC";
$exe = mysqli_query($con, $sql);
echo"<a href='asteam_register.php'>add someone to team</a><br>";
while ($res = mysqli_fetch_array ($exe)){
    $id_asmap = $res['id_asteam'];
    $team_name = $res['team_name'];
    $team_player = $res['team_player'];
    
    echo"id = $id_asteam, team name=$team_name, player name=$team_player";
    echo"<a href='asteam_remover.php?id_asteam=$id_asteam'>remove</a>|<a href='asteam_edit.php?id_asteam=$id_asteam'>edit</a><br>";
    }
?>
<?php include 'bottom.html'
?>