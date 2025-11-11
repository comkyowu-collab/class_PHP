<?php

//foreach で配列の要素を順番に取り出して表示してください。
$students = ["タナカ", "スズキ", "ヤマダ"];

foreach ($students as $student) {
    print "{$student}さん<br>";
};

print "<hr>";
//生徒の「名前 → 点数」を連想配列で管理し、「〇〇さんは△△点です」と表示してください。

$scores = [
    "タナカ" => 85,
    "スズキ" => 92,
    "ヤマダ" => 74
];

foreach ($scores as $name => $score) {
    print "{$name}さんは $score 点です<br>";
};

print "<hr>";

//映画館の３つのスクリーンで上映している作品を配列で管理し、各スクリーンごとに作品を一覧表示してください。

$theater = [
    ["プロジェクトA", "ポリスストーリー", "スパルタンX"],
    ["シンゴジラ", "シンウルトラマン", "シン仮面ライダー"],
    ["鬼滅の刃", "ONE PIECE", "SLAM DUNK"]
];

// $theaterNum = 1;
foreach ($theater as $moviesIndex => $movie) {

    print "シアター" . ($moviesIndex + 1) . "で上映の作品は<br>";
    foreach ($movie as $m) {
        print("「{$m}」");
    }
    print "<br>になります。<br>";
    print "<br>";
    // $theaterNum++;
};

print "<hr>";

//下の配列 $timetable は、あるクラスの時間割を表しています。各曜日の1限・2限・3限を順に出力してください。


$timetable = [
    "月曜日" => ["1限" => "国語", "2限" => "数学", "3限" => "英語"],
    "火曜日" => ["1限" => "理科", "2限" => "社会", "3限" => "音楽"],
    "水曜日" => ["1限" => "美術", "2限" => "体育", "3限" => "技術"]
];


foreach ($timetable as $weekly => $dayClass) {
    print "{$weekly}の講義は<br>";
    foreach ($dayClass as $classNum => $subject) {
        print "$classNum が{$subject}です<br>";
    };
    print "<br>";
};

print "<hr>";



// 以下の配列は、ドリンクごとの「曜日別販売数」です。各ドリンクについて合計販売数を求め「ドリンク名＋曜日ごとの販売＋合計」を出力してください。


$sales = [
    "コーヒー" => ["月" => 35, "火" => 42, "水" => 31, "木" => 50, "金" => 46],
    "紅茶" => ["月" => 28, "火" => 30, "水" => 26, "木" => 33, "金" => 29],
    "ラテ" => ["月" => 40, "火" => 38, "水" => 44, "木" => 47, "金" => 50]
];

print "各ドリンクの販売数量をお知らせします。<br>";

foreach ($sales as $drinkMenu => $salesNum) {
    $total = 0;
    print "[{$drinkMenu}]<br>";
    foreach ($salesNum as $weeklys => $Num) {
        print "{$weeklys}曜日 : 限定 $Num 杯<br>";
        $total += $Num;
    }
    print "<br>";
    print "{$total}杯が{$drinkMenu}の限定販売数になります。<br>";
    print "<br>";
}
