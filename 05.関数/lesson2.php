<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)






$w = date('w');
$week = ['日', '月', '火', '水', '木', '金', '土'];
$date1 = date( "(Y年m月d日H時i分s秒(".$week[$w]."曜日))");

$date2 = date("(Y年m月d日H時i分s秒)",strtotime('+3 day'));

$date3 = date("(Y年m月d日H時i分s秒)",strtotime('-12 hour'));


$today = date("Y-m-d");
$today = strtotime($today);
$day = strtotime('2020-01-01');
$date4 = ($today - $day) / (60 * 60 * 24). '日';





echo "・現在日時".$date1."<br>";
echo "・現在日時から３日後".$date2."<br>";
echo "・現在日時から１２時間前".$date3."<br>";
echo "・2020年元旦から現在までの経過日数".$date4."<br>";

