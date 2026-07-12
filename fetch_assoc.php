<?php
require_once 'dbmanage.php';
$db = getDB();
$str = $db->query("SELECT title AS name, publish AS name FROM books WHERE isbn = '10'");
print_r($str->fetch(PDO::FETCH_ASSOC));
