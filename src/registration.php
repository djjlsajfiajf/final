<?php
    const SERVER ='mysql214.phy.lolipop.lan';
    const DBNAME ='LAA1517433-shop';
    const USER = 'LAA1517433';
    const PASS = 'Pass0530';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

    <p>商品を追加</p>
    <form action="registration-output.php" method="post">
		ID<input type="text" name="ID"><p>
		めんどくさいこと<input type="text" name="name"><p>
        <input type="submit" value="登録">
    </form>
    <button onclick="location.href='index.html'">戻る</button>