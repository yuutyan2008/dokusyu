<?php
function getDb(): PDO
{
    $dsn = 'mysql:dbname=dokusyu_php; host=localhost; charset=utf8';
    $usr = 'root';
    $password = 'root';

    // PDOオブジェクトがDB接続を管理する
    $db = new PDO($dsn, $usr, $password);
    //例外処理を有効にする
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
}
