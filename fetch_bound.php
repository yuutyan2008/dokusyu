<?php

require_once 'dbmanage.php';
try {
    $db = getDB();
    $stt = $db->prepare('SELECT * FROM photos WHERE id = ?');
    $stt->bindValue(1, $_GET['id'] ?: 1);
    $stt->execute();
    //予めデータを格納する変数を用意しておく
    $stt->bindColumn('type', $type, PDO::PARAM_STR);
    $stt->bindColumn('data', $data, PDO::PARAM_LOB);

    if ($stt->fetch(PDO::FETCH_BOUND)) {

        header("Cotent-Type: {$type}");
        // print $data;
        fpassthru($data);
    } else {
        print '該当するデータがありません';
    }
} catch (PDOException $e) {
    die("エラーメッセージ: {$e->getMessage()}");
}
