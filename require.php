<?php
$connect = mysqli_connect('127.0.0.1','root','cjssus00','practice');
$sql = 'SELECT * FROM baseball';
$query = mysqli_query($connect,$sql);
//read title
$title_list = '';
while($result = mysqli_fetch_array($query)) {
    $title_list .= "<li><a href=\"index.php?id={$result['id']}\">{$result['title']}</a></li>";
}
//파라미터 id isset
$update = '';
$delete = '';
$time = '';
if(isset($_GET['id'])) {
    $sql = "SELECT * FROM baseball WHERE id={$_GET['id']}";
    $query = mysqli_query($connect,$sql);
    $result = mysqli_fetch_array($query);
    $title = $result['title'];
    //read description
    $description = $result['description'];
    //read time
    $time = '작성일은 '.$result['time'].' 입니다.';
    //update
    $update = "<a href=\"update.php?id={$_GET['id']}\">update</a>";
    //delete
    $delete = "<form action='process_delete.php' method='POST'>
    <input type='hidden' name='id' value='{$_GET['id']}'>
    <input type='submit' value='delete'>
    </form>";

} else {
    $title = 'WEB';
    $description = 'Hello World';
}
?>