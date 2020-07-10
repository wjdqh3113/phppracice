<?php
$connect = mysqli_connect('127.0.0.1','root','cjssus00','practice');
$sql = "UPDATE baseball SET title='{$_POST['title']}', description='{$_POST['description']}' 
        WHERE id={$_POST['id']}";
$query = mysqli_query($connect,$sql);

if (!$query) {
        echo '실패했습니다';
        print_r(mysqli_error($connect));
} else{
        header("location:index.php?id={$_POST['id']}");
}
?>