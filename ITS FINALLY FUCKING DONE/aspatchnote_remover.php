
<?php
session_start();
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

                <?php
    $con = mysqli_connect('localhost','root','','thebigsecond');
    $id_asnote = $_GET['id_asnote'];
    $sql="select * from as_patchnotes where id_asnote=$id_asnote";
    $exe = mysqli_query($con, $sql);
    echo"
        are you sure you want to delete this? <br>
        <a href='aspatchnote_remover2.php?id_asnote=$id_asnote' class='bg-white p-4 text-black rounded-lg opacity-70 flex flex-col'> 
        <p> YES I AM SURE!</p>
        </a>
        <a href='aspatchnotes.php' class='bg-white p-4 text-black rounded-lg opacity-70 flex flex-col'>
        <p> NO I DO NOT WANT TO DELETE IT!</p>
                            </a><br>";
                        
                ?>
            </ul>
        </nav>
    </section>
<footer class=" absolute bottom-0 w-screen text-center  text-white bg-black">
  <p>2025 bnuuy inc.</p>
</footer>

</body>
</html>
