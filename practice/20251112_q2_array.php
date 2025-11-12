<?php
print "<br>";

// 問題1

// 次の数値を配列に入れて、合計と平均を求めなさい。
// [80, 65, 90, 75, 100]

$scores = [80, 65, 90, 75, 100];

$total = 0;
$t = 0;
foreach ($scores as $score) {
    $total += $score;
    $t++;
};
$average = $total / $t;

print "合計点は{$total}です<br>";
print "平均点は{$average}です<br>";

print "<hr>";


print "↓お手本<br>";
$total = 0;
foreach ($scores as $score) {
    $total += $score;;
}

$average = $total / count($scores);

print "合計:{$total}<br>";
print "平均:{$average}点です<br>";


print "<hr>";
// 問題2

// 5つの好きな食べ物を配列に入れ、foreach で番号付きで表示しなさい。
// 出力例：

// 1. ラーメン
// 2. カレー
// 3. 寿司
// 4. ピザ
// 5. 焼肉

$menu = [
    "ラーメン",
    "カレー",
    "寿司",
    "ピザ",
    "焼肉"
];

$eatIndex = 0;
print "好きな食べ物<br>";
foreach ($menu as $eat) {
    print "第" . ($eatIndex + 1) . "位:{$eat}<br>";
    $eatIndex++;
};

print "<hr>";


// 問題3

// 次の連想配列 $scores の中から、最高点を求めなさい。

// 出力例：
// 最高点は「数学：95点」です。

$scores2 = [
    "国語" => 82,
    "数学" => 95,
    "英語" => 74,
    "理科" => 88,
    "社会" => 91
];

$maxSubject = "";
$maxScore = 0;
foreach ($scores2 as $subject1 => $score) {
    if ($maxScore < $score) {
        $maxScore = $score;
        $maxSubject = $subject1;
    }
}

print "最高点は「{$maxSubject}:" . ($maxScore) . "」です<br>";



print "<hr>";
// 問題4

// 次のような連想配列 $book から「タイトル」「著者」「価格」を1行ずつ表示しなさい。
// 出力例：

// タイトル：PHP入門
// 著者：ナガチャン
// 価格：1980円


$book = [
    "title" => "PHP入門",
    "author" => "ナガチャン",
    "price" => 1980
];

$q = 0;
foreach ($book as $type => $about) {
    if ($q === 0) {
        print "タイトル:{$about}<br>";
    } else if ($q === 1) {
        print "著者:{$about}<br>";
    } else {
        print "価格:{$about}円<br>";
    }
    $q++;
};

print "<hr>";


// 発展編（二次元配列）
// 問題5

// 次の二次元配列 $students から、名前と点数を1行ずつ表示しなさい。
// 出力例：

// 山田：80点
// 佐藤：90点
// 鈴木：75点

$students = [
    ["name" => "山田", "score" => 80],
    ["name" => "佐藤", "score" => 90],
    ["name" => "鈴木", "score" => 75],
];

foreach ($students as $student) {
    print "{$student['name']}:{$student['score']}点<br>";
}

print "<hr>";


// 問題6
// 次の二次元配列から、各教科の平均点を求めなさい。
// 出力例：

// 国語の平均：80
// 数学の平均：85
// 英語の平均：88

$scores = [
    [80, 70, 90],  // 国語
    [75, 85, 95],  // 数学
    [88, 92, 84],  // 英語
];

//count()関数で配列の要素数を取得
$sum = 0;
$b = 0;
foreach ($scores as $subjects2) {

    foreach ($subjects2 as $score3) {
        $sum += $score3;
        $avr = ($sum / 3);
    };
    if ($b === 0) {
        print "国語の平均：{$avr}<br>";
    } elseif ($b === 1) {
        print "数学の平均：{$avr}<br>";
    } else {
        print "英語の平均：{$avr}<br>";
    }
    $b++;
    $sum = 0;
};

print "<hr>";

print "↓お手本<br>";
$subject = ["国語", "数学", "英語"];
foreach ($scores as $i => $subject_scores) {
    $sum = 0;
    foreach ($subject_scores as $score) {
        $sum += $score;
    }

    $average = $sum / count($subject_scores);
    print "{$subject[$i]}の平均：{$average}<br>";
};


print "<hr>";

// 問題7

// 次の配列から、「商品名」と「税込価格（10％）」を表示しなさい。

//floor関数で小数点以下を切り捨て

// 出力例：
// ノート：132円
// ペン：88円
// 消しゴム：110円

$items = [
    ["name" => "ノート", "price" => 120],
    ["name" => "ペン", "price" => 80],
    ["name" => "消しゴム", "price" => 100]
];

$tax = 1.1;

foreach ($items as $item) {
    $taxInPrice = floor($item['price'] * $tax);
    print "{$item['name']}:{$taxInPrice}円<br>";
}

print "<hr>";

// チャレンジ問題（実践的）
// 問題8

// 次の $members 配列を使って、「平均年齢」を計算しなさい。
//count()関数で配列の要素数を取得

$members = [
    ["name" => "田中", "age" => 20],
    ["name" => "佐藤", "age" => 25],
    ["name" => "鈴木", "age" => 30],
    ["name" => "中村", "age" => 28],
];

$sumAge = 0;
foreach ($members as $member) {
    print "{$member["name"]}さん : " . "{$member["age"]}歳<br>";
    $sumAge += $member["age"];
}

$averageAge = $sumAge / count($members);
print "この" . (count($members)) . "人の平均年齢は" . $averageAge . "歳です。<br>";
