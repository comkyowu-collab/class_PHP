<?php
$fruits = ['apple', 'banana', 'cherry'];
list($a, $b, $c) = $fruits;

echo $b; // ?


$colors = [
    'primary' => 'red',
    'secondary' => 'green',
    'tertiary' => 'blue'
];

['secondary' => $s, 'primary' => $p] = $colors;
echo "$p and $s";


$user = [
    'name' => 'Taro',
    'contact' => [
        'email' => 'taro@example.com',
        'phone' => '090-1234-5678'
    ]
];

[
    'name' => $name,
    'contact' => ['email' => $email]
] = $user;

echo "$name のメールは $email です。";


<?php
$users = [
    ['name' => 'Aki', 'age' => 20],
    ['name' => 'Sota', 'age' => 22],
    ['name' => 'Mio', 'age' => 21]
];

foreach ($users as ['name' => $n, 'age' => $a]) {
    echo "$nは$a歳です。\n";
}


<?php
$data = [
    'id' => 101,
    'info' => ['Alice', 'Developer']
];

['id' => $id, 'info' => [$name, $job]] = $data;

echo "$id: $name は $job です。";



//　=>は、「右辺の配列の キーに対応する値 を、左辺の変数に代入する」