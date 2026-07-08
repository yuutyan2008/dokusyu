<?php
require_once 'dbmanage.php';
require_once 'encode.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>結果セット</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>ISBNコード</th>
                <th>書名</th>
                <th>価格</th>
                <th>出版社</th>
                <th>出版日</th>
            </tr>
        </thead>
        <tbody>
            <?php
            try {
                $db = getDb();
                $str = $db->prepare('SELECT * FROM books ORDER BY published DESC');
                $str->execute();
                while ($row = $str->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <tr>
                        <td><?= e($row['isbn']) ?></td>
                        <td><?= e($row['title']) ?></td>
                        <td><?= e($row['price']) ?></td>
                        <td><?= e($row['publish']) ?></td>
                        <td><?= e($row['published']) ?></td>
                    </tr>
            <?php
                }
            } catch (PDOException $e) {
                echo 'エラーが発生しました: ' . $e->getMessage();
            }
            ?>
        </tbody>
    </table>
</body>

</html>
