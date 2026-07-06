<?php
require_once 'dbmanage.php';
$db = getDb();

//定数PDO::ATTR_ERRMODEの設定値をPDO::ERRMODE_EXCEPTIONにすることで、例外処理が有効になり、書かなくてもエラーが表示されるようになる
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec('MECHE KUCHA'); //存在しないクエリを実行
