<?php
// FETCH_ASSOCとFETCH_NAMEDの違いを確認する
// FETCH_ASSOCはフィールド名が重複したら上書きされ、FETCH_NAMEDは両方の値が返される
require_once 'dbmanage.php';;
$db = getDB();
$str = $db->query("SELECT title AS name, publish AS name FROM books WHERE isbn = '10'");
print_r($str->fetch(PDO::FETCH_NAMED));
