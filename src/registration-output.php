<?php
const SERVER ='mysql214.phy.lolipop.lan';
const DBNAME ='LAA1517433-shop';
const USER = 'LAA1517433';
const PASS = 'Pass0530';

$connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<?php
$pdo = new PDO($connect, USER, PASS);


$sql = $pdo->prepare('INSERT INTO bothered (ID, name) VALUES (?, ?)');
$sql->bindParam(1, $_POST['ID'], PDO::PARAM_INT);
$sql->bindParam(2, $_POST['name'], PDO::PARAM_STR);


if ($sql->execute()) {
    echo '<font color="blue">追加に成功しました。</font>';
} else {
    echo '<font color="red">追加に失敗しました。</font>';
}
?>
<br><hr><br>
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
<form action="registration.php" method="post">
    <button type="submit">登録画面に戻る</button>
</form>
