<?php
require_once 'dbmanage.php';

try {
    //db接続
    $db = getDb();
    //クエリ準備
    $stt = $db->prepare('INSERT INTO books (isbn, title, price, publish, published)
    VALUES (:isbn, :title, :price, :publish, :published)');
    //プレイスホルダーに値をセット
    $stt->bindValue(':isbn', $_POST['isbn']);
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':publish', $_POST['publish']);
    $stt->bindValue(':published', $_POST['published']);
    //クエリ実行
    $stt->execute();
    //処理完了後のリダイレクト先
    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/insert_form.php');
} catch (PDOException $e) {
    echo 'エラーが発生しました: ' . $e->getMessage();
}
