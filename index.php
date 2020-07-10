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
    <a href="create.php">create</a>
    <?=$update?>
    <p><?=$delete?></p>
    <h2><?=$title?></h2>
    <p><?=$description?></p>
    <p><?=$time?></p>
</body>
</html>