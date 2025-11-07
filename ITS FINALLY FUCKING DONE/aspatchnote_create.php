

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

    <form action='aspatchnote_register.php' class='bg-black p-4 text-white rounded-lg opacity-70 flex flex-col'>
        <label>name</label>
        <input type='text' name='asnote_name' class='bg-white p-2 text-black rounded-lg opacity-70 flex flex-col'><br>
        <label>note</label>
        <input type='text' name='asnote_note' class='bg-white p-2 text-black rounded-lg opacity-70 flex flex-col'><br> 
        <input class='bg-black p-2  rounded-lg opacity-70 flex flex-col'><br> 
    
        <input type='submit' value='ver resullpwatod'  class='bg-white p-1 text-black rounded-lg p-2 opacity-70 w-80 content-center text-center'>
</html>
                   
                        
                
    
            </ul>
        </nav>
    </section>
<footer class=" absolute bottom-0 w-screen text-center  text-white bg-black">
  <p>2025 bnuuy inc.</p>
</footer>
