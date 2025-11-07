<?php
session_start();
?>
<?php
$con = mysqli_connect('localhost','root','','thebigsecond');
$sql = "select * from as_character order by id_chara ASC";
$exe = mysqli_query($con, $sql);
?>
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
                <h1 class="text-3xl">Characters</h1>
                <?php
                    $con = mysqli_connect('localhost','root','','thebigsecond');
                    $id_chara = $_GET['id_chara'];
                    $sql = "select * from as_character where id_chara = $id_chara";
                    $exe = mysqli_query($con, $sql);
                    while ($res = mysqli_fetch_array ($exe)){
                        $id_asteam = $res['id_chara'];
                        $chara_name = $res['chara_name'];
                        $chara_hp = $res['chara_hp'];
                        $chara_ws = $res['chara_ws'];
                        $chara_rs = $res['chara_rs'];
                        $chara_desc = $res['chara_desc'];
                        $chara_lore = $res['chara_lore'];  
                    } 

                        echo"<div class='bg-black p-4 text-white rounded-lg opacity-70 flex flex-col'>    
                            <p> name : $chara_name <br>
                            HP : $chara_hp <br>
                            Walk speed : $chara_ws , Run speed : $chara_rs <br>
                            description : $chara_desc <br>
                            lore : $chara_lore</p>
                    
                        </div><br>";

                        
                        echo"<a href='ascharacter_edit.php?id_chara=$id_chara'
                            class='bg-black p-4 text-white rounded-lg opacity-70 flex flex-col'>    
                            <p>edit</p>
                            </a>";
                        echo"<a href='ascharacter_remover.php?id_chara=$id_chara'
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
</html>
