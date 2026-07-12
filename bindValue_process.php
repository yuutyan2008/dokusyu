<?php

require_once 'dbmanage.php';

try {
    $db = getDb();
    $stt = $db->prepare('INSERT INTO photos(type, data) VALUES(:type, :data)');
    $file = fopen($_FILES['photo']['tmp_name'], 'rb');

    $stt->bindValue(':type', $_FILES['photo']['type'], PDO::PARAM_STR);
    //バイナリーデータはラージオブジェクト型指定
    $stt->bindValue(':data', $file, PDO::PARAM_LOB);

    $stt->execute();
    print '写真のアップロードに成功しました';
} catch (PDOException $e) {
    die("エラーメッセージ： {$e->getMessage()}");
}
