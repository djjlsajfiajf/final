<?php
    const SERVER ='mysql214.phy.lolipop.lan';
    const DBNAME ='LAA1517433-shop';
    const USER = 'LAA1517433';
    const PASS = 'Pass0530';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<table>
<tr>めんどくさいこと<th></th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from bothered') as $row) {
        echo '<tr>';
		echo '<td>', $row['name'],'</td>' ;
		echo '<td>', $row['ID'],'</td>';
        echo '</tr>';
		echo "\n";
	}
?>
</table>
<button onclick="location.href='index.html'">戻る</button>