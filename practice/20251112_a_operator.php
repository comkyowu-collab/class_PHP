<?php

$a = 10;
$b = 3;
echo $a % $b;

// 出力結果は？
//1

echo "<br>";

$x = 5;
$y = $x++;
echo $y;    // 後置インクリメント

// 出力結果は？
//5

$a = 5;
$b = "5";
var_dump($a == $b);
var_dump($a === $b);

// 出力結果は？
//bool(true)
//bool(false)

$x = 8;
$y = 3;
if ($x > 5 && $y < 5) {
    echo "OK";
} else {
    echo "NG";
}

// 出力結果は？
//OK


$num = 10;
$num += 5;
echo $num;

// 出力結果は？
//15


$age = 20;
$message = ($age >= 18) ? "成人" : "未成年";
echo $message;

// 出力結果は？
//成人
