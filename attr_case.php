<?php
require_once 'dbmanage.php';

$db = getDb();
//DBが大文字小文字を自動変換する機能に備え、混乱防止のために事前に変換する処理を入れておく
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
print_r($db->query('SELECT * FROM books')->fetchALL(PDO::FETCH_ASSOC));
