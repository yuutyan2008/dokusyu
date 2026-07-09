<?php
require_once 'dbmanage.php';
$db = getDB();
$stt = $db->query('SELECT * FROM BOOKS ORDER BY published DESC');
print_r($stt->fetchAll(PDO::FETCH_ASSOC));
