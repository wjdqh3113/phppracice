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
    <form action="process_update.php" method="POST">
       <input type="hidden" name="id" value="<?=$_GET['id']?>">   
        <p><input type="text" name="title" value="<?=$title?>"></p>
        <p><textarea name="description"><?=$description?></textarea></p>
        <p><input type="submit" value="submit"></p>
    </form>
</body>
</html>