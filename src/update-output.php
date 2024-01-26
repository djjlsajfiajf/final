<?php
const SERVER ='mysql214.phy.lolipop.lan';
const DBNAME ='LAA1517433-shop';
const USER = 'LAA1517433';
const PASS = 'Pass0530';

$connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<?php
$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->prepare('UPDATE bothered SET name=? WHERE ID=?');

if (empty($_POST['name'])) {
    echo 'ブランド名を入力してください。';
} else {
    
    if ($sql->execute([$_POST['name'], $_POST['ID']])) {
        echo '更新に成功しました。';
    } else {
        echo '更新に失敗しました。';
    }
}
?>
<hr>
<table>
    <tr><th>ID</th><th>めんどくさいこと</th></tr>

<?php
foreach ($pdo->query('SELECT * FROM bothered') as $row) {
    echo '<tr>';
    echo '<td>', $row['ID'], '</td>';
    echo '<td>', $row['name'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
<button onclick="location.href='update.php'">更新画面へ戻る</button>
