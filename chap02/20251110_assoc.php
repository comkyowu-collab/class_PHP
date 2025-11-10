<?php
$members = [
  '山田太郎' => '千葉県府中市東町1-1-1',
  '掛谷翔太' => '広島県福岡市北町2-2-2',
  '日尾有宏' => '群馬県三次市南町3-3-3',
  '本多のぞみ' => '埼玉県豊田市西町4-4-4',
  '矢吹久美子' => '愛知県岡山市本町5-5-5',
];
print $members['山田太郎'] . "<br>";

print "<hr>";
//連想配列userを作り下記の通り出力するコードを記載
//名前:田中太郎　年齢:25　職業:デザイナー

$user = [
  'name' => '田中太郎',
  'age' => 25,
  'job' => 'デザイナー'
];

// 表示方法１　１つ１つ記載する
echo '名前:' . $user['name'] . "<br>";
echo '年齢:' . $user['age'] . "<br>";
echo '職業:' . $user['job'] . "<br>";


//表示方法２　foreachでまわす
foreach ($user as $key => $value) {  //as->で～と同じのような意味になる
  print "{$key} : {$value}<br>";
}

print "<hr>";

//やってみよう！
$members = ["永田", "高菜", "小松菜", "善利", "薺",];
foreach ($members as $member) {
  print $member . "<br>";
}

print "<hr>";

//国語、英語、数学、社会、理科（順不同）の各教に任氏の点数をつけ、
//国語:85....のような形で出力するコード

$scores = [
  "japanese" => 85,
  "math" => 22,
  "english" => 90,
  "science" => 18,
  "society" => 99,
];

foreach ($socores as $key => $value) {
  print "{$key} : {$value}<br>";
};
