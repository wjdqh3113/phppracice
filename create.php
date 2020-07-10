<?php
require_once('./require.php');
?>
<!doctype html>
<html>
<head> 
    <meta charset="utf-8">
    <title>practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?=$title_list?>
    </ol>
    <form action="process_create.php" method="POST">
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea name="description" id="description" placeholder="description"></textarea></p>
        <p><input type="submit" value="create"></p>
    </form>
</body>
</html>