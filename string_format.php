<?php

$s = $_POST['string'];
$m = mb_strlen($s);
$n = $_POST['number'];

        if ($m >= $n) {

        // s の文字列を配列に格納
        for ($i=0 ; $i < $m ; $i++) {
            $str[] = mb_substr($s, $i, 1, "UTF-8");
        }

        echo "文字列 " . $s . " の " . $n . " 番目の文字は ";
        // 指定文字を出力
        echo $str[$n];
        echo " です。";

    } else {
        echo $m . "以下の正の整数を入力してください";
    }

