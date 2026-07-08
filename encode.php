1<?php
    //エスケープ処理関数を定義
    function e(string $str, string $charset = 'UTF-8'): string
    {
        //htmlspecialchars関数を使って、HTMLエスケープする
        return htmlspecialchars($str, ENT_QUOTES, $charset);
    }
