<?php
$connect = mysqli_connect('127.0.0.1','root','cjssus00','practice');
$sql = "INSERT INTO baseball(title,description,time)
        VALUES('{$_POST['title']}', '{$_POST['description']}', NOW())";
$query = mysqli_query($connect,$sql);

if (!$query) {
        echo '실패했습니다';
        print_r(mysqli_error($connect));
} else{
        echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
?>