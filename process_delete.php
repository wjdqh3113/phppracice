<?php
$connect = mysqli_connect('127.0.0.1','root','cjssus00','practice');
$sql = "DELETE FROM baseball WHERE id={$_POST['id']}";
// $sql = "DELETE FROM topic WHERE id=$filtered_id";
$query = mysqli_query($connect,$sql);

if (!$query) {
        echo '실패했습니다';
        print_r(mysqli_error($connect));
} else{
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
?>