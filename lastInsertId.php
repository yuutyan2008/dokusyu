<?php
require_once 'dbmanage.php';
try {
    $db = getDb();
    $db->exec("INSERT INTO members (name, sex, old, enter, memo) VALUES ('山田太郎', '男', 20, '2021-07-08', '')");
    // 自動連番されたIDを取得するlastInsertId()
    print "直近のID値: {$db->lastInsertId()}";
} catch (PDOException $e) {
    die("エラーが発生しました: " . $e->getMessage());
}
