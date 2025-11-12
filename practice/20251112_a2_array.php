<?php

// 問題

// 次の数値を配列に入れて、合計と平均を求めなさい。
// [80, 65, 90, 75, 100]

$scores = [80, 65, 90, 75, 100];
$sum = 0;
foreach ($scores as $score) {
    $sum += $score;
}

$average = $sum / count($scores);

print "合計：{$sum}<br>";
print "平均：{$average}<br>";

print "<hr>";

// 問題2

// 5つの好きな食べ物を配列に入れ、foreach で番号付きで表示しなさい。

$menu = [
    "ラーメン",
    "カレー",
    "寿司",
    "ピザ",
    "焼肉"
];

foreach ($menu as $i => $food) {
    $num = $i + 1;
    print "{$num}. {$food}<br>";
}

// 出力例：

// 1. ラーメン
// 2. カレー
// 3. 寿司
// 4. ピザ
// 5. 焼肉

print "<hr>";



// 問題3

// 次の連想配列 $scores の中から、最高点を求めなさい。

// $scores = [
//     "国語" => 82,
//     "数学" => 95,
//     "英語" => 74,
//     "理科" => 88,
//     "社会" => 91
// ];

// 出力例：

// 最高点は「数学：95点」です。

$scores = [
    "国語" => 82,
    "数学" => 95,
    "英語" => 74,
    "理科" => 88,
    "社会" => 91
];

$max_subject = "";
$max_score = 0;
foreach ($scores as $subject => $score) {
    if ($score > $max_score) {
        $max_score = $score;
        $max_subject = $subject;
    }
}
print "最高点は「{$max_subject}：{$max_score}点」です。<br>";

print "<hr>";

// 問題4

// 次のような連想配列 $book から「タイトル」「著者」「価格」を1行ずつ表示しなさい。

// $book = [
//     "title" => "PHP入門",
//     "author" => "ナガチャン",
//     "price" => 1980
// ];

$book = [
    "title" => "PHP入門",
    "author" => "ナガチャン",
    "price" => 1980
];

print "タイトル：{$book['title']}<br>";
print "著者：{$book['author']}<br>";
print "価格：{$book['price']}円<br>";

print "<hr>";

// 出力例：

// タイトル：PHP入門
// 著者：ナガチャン
// 価格：1980円

// 発展編（二次元配列）
// 問題5

// 次の二次元配列 $students から、名前と点数を1行ずつ表示しなさい。

// $students = [
//     ["name" => "山田", "score" => 80],
//     ["name" => "佐藤", "score" => 90],
//     ["name" => "鈴木", "score" => 75],
// ];


$students = [
    ["name" => "山田", "score" => 80],
    ["name" => "佐藤", "score" => 90],
    ["name" => "鈴木", "score" => 75], ];

foreach ($students as $s) {
    print "{$s['name']}：{$s['score']}点<br>";
}


// 出力例：

// 山田：80点
// 佐藤：90点
// 鈴木：75点

print "<hr>";

// 問題6

// 次の二次元配列から、各教科の平均点を求めなさい。

// $scores = [
//     [80, 70, 90],  // 国語
//     [75, 85, 95],  // 数学
//     [88, 92, 84],  // 英語
// ];


// 出力例：

// 国語の平均：80
// 数学の平均：85
// 英語の平均：88

$scores = [
    [80, 70, 90],  // 国語
    [75, 85, 95],  // 数学
    [88, 92, 84],  // 英語
];

$subjects = ["国語", "数学", "英語"];
foreach ($scores as $i => $subject_scores) {
    $sum = 0;
    foreach ($subject_scores as $score) {
        $sum += $score;
    }
    //count()関数で配列の要素数を取得
    $average = $sum / count($subject_scores);
    print "{$subjects[$i]}の平均：{$average}<br>";
}

print "<hr>";

// 問題7

// 次の配列から、「商品名」と「税込価格（10％）」を表示しなさい。

$items = [
    ["name" => "ノート", "price" => 120],
    ["name" => "ペン", "price" => 80],
    ["name" => "消しゴム", "price" => 100]
];

foreach ($items as $item) {
    //floor関数で小数点以下を切り捨て
    $tax_included_price = floor($item['price'] * 1.1);
    print "{$item['name']}：{$tax_included_price}円<br>";
}

print "<hr>";


// 出力例：

// ノート：132円
// ペン：88円
// 消しゴム：110円

// チャレンジ問題（実践的）
// 問題8

// 次の $members 配列を使って、「平均年齢」を計算しなさい。

$members = [
    ["name" => "田中", "age" => 20],
    ["name" => "佐藤", "age" => 25],
    ["name" => "鈴木", "age" => 30],
    ["name" => "中村", "age" => 28],
];

$total_age = 0;
foreach ($members as $member) {
    $total_age += $member['age'];
}
$average_age = $total_age / count($members);
print "平均年齢：{$average_age}歳<br>";

print "<hr>";


// 出力例：

// 平均年齢：25.75歳
