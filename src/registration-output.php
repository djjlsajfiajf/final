<?php
    const SERVER ='mysql214.phy.lolipop.lan';
    const DBNAME ='LAA1517433-shop';
    const USER = 'LAA1517433';
    const PASS = 'Pass0530';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into bothered values(?, ?)');
    if($sql->execute([$_POST['ID'],$_POST['name']])){
        echo '<font color="blue">追加に成功しました。</font>';
    }else{
        echo '<font color="red">追加に失敗しました。</font>';
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
    <form action="registration.php" method="post">
        <button type="submit">登録画面に戻る</button>
    </form>