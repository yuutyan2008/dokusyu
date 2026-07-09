<?php
require_once 'dbmanage.php';
require_once 'book.php';
$db = getDB();
$stt = $db->query("SELECT * FROM books WHERE isbn ='10'");
if ($row = $stt->fetchObject('Book', [0.1])) {
    print "{$row->title} : {$row->discount()}円";
    ($row);
}
