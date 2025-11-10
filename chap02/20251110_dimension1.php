<pre>
<?php
$data1 = [
  ['X-1', 'X-2', 'X-3'],
  ['Y-1', 'Y-2', 'Y-3'],
  ['Z-1', 'Z-2', 'Z-3'],
];
print_r($data1);

print "<hr>";

$students = [
  ['name' => '山田太郎', 'score' => 25],
  ['name' => '吉岡哲夫', 'score' => 99],
  ['name' => '小泉新次郎', 'score' => 70],
  ['name' => 'ベイクドもちょちょ', 'score' => 3520],
];



foreach ($students as $s) {
  print "{$s['name']}:{$s['score']}点<br>";
}

print "<hr>";

$scores = [
  "山田" => ["国語" => 10, "英語" => 20, "数学" => 15],
  "鈴木" => ["国語" => 12, "英語" => 2, "数学" => 100],
  "田中" => ["国語" => 20, "英語" => 12, "数学" => 10],
  "永田" => ["国語" => 100, "英語" => 100, "数学" => 100],
];

foreach ($scores as $naming => $subjects) {
  print "${naming}さんの成績<br>";
  foreach ($subjects as $subject => $point) {
    print "{$subject}:{$point}点<br>";
  };
};
