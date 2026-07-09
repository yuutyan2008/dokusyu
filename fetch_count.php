<?php
require_once 'dbmanage.php';
$db = getDB();
$stt = $db->query('SELECT COUNT(*) FROM books');
print "件数：{$stt->fetchColumn()}件";
