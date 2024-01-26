<?php
    const SERVER ='mysql214.phy.lolipop.lan';
    const DBNAME ='LAA1517433-shop';
    const USER = 'LAA1517433';
    const PASS = 'Pass0530';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from bothered') as $row){
        $sql=$pdo->prepare('delete from bothered where ID=?');
    if($sql->execute([$_REQUEST['ID']])){
        echo '削除に成功しました。';
    }else{
        echo '削除に失敗しました。';
    }
?>
    <br><hr><br>
	<table>
    <tr><th>ID</th><th>めんどくさいこと</th></tr>
<?php
    foreach ($pdo->query('select * from bothered') as $row) {
        echo '<tr>';
        echo '<td>',$row['ID'], '</td>';
        echo '<td>',$row['name'], '</td>';
        echo '</tr>';
        echo "\n";
    }
?> 
</table>
    <form action="delete.php" method="post">
        <button type="submit">削除画面へ戻る</button>
    </form>

