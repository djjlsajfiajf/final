<?php
    const SERVER ='mysql214.phy.lolipop.lan';
    const DBNAME ='LAA1517433-shop';
    const USER = 'LAA1517433';
    const PASS = 'Pass0530';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<table>
<tr><th>ID</th><th>めんどくさいこと</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
	foreach ($pdo->query('select * from bothered') as $row) {
        echo '<tr>';
		echo '<form action="update-output.php" method="post">';
		echo '<td>','<input type = "hidden" name = "id" value = "', $row['ID'], '">','</td>';
		echo '<td>','<div class="td0">', $row['ID'], '</div>','</td>';
		echo '<div class="td1">';
		echo '<td>','<input type = "text" name = "name" value = "', $row['name'], '">','</td>';
		echo '</div>';
		echo '<div class="td1">';
		echo '</div>';
		echo '<td>','<div class="td2"><input type = "submit" value = "更新"></div>','</td>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}
?>
</table>
<button onclick="location.href='index.html'">戻る</button>