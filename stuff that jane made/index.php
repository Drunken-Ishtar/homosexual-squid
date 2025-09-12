<?php
session_start();
include 'top.html'
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <title>3d server starter page</title>
    </head>
    <body>
        <a href='logon.html'>login </a><br>

        <a href='logout.html'>logout</a><br>

        <a href='adminonly.php'>admin only</a><br>

        <a href='crossroads.php'>big page that takes lets you edit all of the databases</a>
    </body>
</html>
<?php
include 'bottom.html'
?>