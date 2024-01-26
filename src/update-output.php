<?php
    const SERVER ='mysql214.phy.lolipop.lan';
    const DBNAME ='LAA1517433-shop';
    const USER = 'LAA1517433';
    const PASS = 'Pass0530';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $spl=$pdo->prepare('update bothered set ID=?,name=?');
    if (empty($_REQUEST['name'])) {
        echo 'ブランド名を入力してください。';
    } else

    if($spl->execute([htmlspecialchars($_POST['name']),$_POST['ID']])){
        echo '更新に成功しました。';
    }else{
        echo '更新に失敗しました。';
    }
    
?>
        <hr>
        <table>
        <tr><th>ID</th><th>めんどくさいこと</th></tr>

<?php
foreach ($pdo->query('select * from bothered') as $row) {
    echo '<tr>';
    echo '<td>', $row['ID'], '</td>';
    echo '<td>', $row['name'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
        </table>
<button onclick="location.href='update.php'">更新画面へ戻る</button>