<?php
try {
    //接続
    $db = new PDO('dbname', 'username', 'password');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print '接続に成功しました';
} catch (PDOException $e) {
    print 'エラーが発生しました: ' . $e->getMessage();
}
