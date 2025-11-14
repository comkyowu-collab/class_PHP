<?php

$fruits = ['apple', 'banana', 'cherry'];
list($a, $b, $c) = $fruits;

print $b;


$colors = [
    'primary' => 'red',
    'secondary' => 'green',
    'tertiary' => 'blue'
];

['secondary' => $s, 'primary' => $p] = $colors;
print "{$p} and {$s}<br>";

print "<hr>";

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

print "{$name} のメールは {$email} です。<br>";


$users = [
    ['name' => 'Aki', 'age' => 20],
    ['name' => 'Sota', 'age' => 22],
    ['name' => 'Mio', 'age' => 21]
];

foreach ($users as ['name' => $n, 'age' => $a]) {
    print "{$n}は{$a}歳です。<br>";
}


$data = [
    'id' => 101,
    'info' => ['Alice', 'Developer']
];

['id' => $id, 'info' => [$name, $job]] = $data;

print "$id: $name は $job です。";



//　=>は、「右辺の配列の キーに対応する値 を、左辺の変数に代入する」
