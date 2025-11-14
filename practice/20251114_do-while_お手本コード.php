<?php

// ↓これは入力前に判定してしまうので、そもそも入力できないようになる
while ($passward !== "secret") {
    $passward = readline("パスワードを入力してください");
};
echo "ログイン成功";

// ↓なので一度読み込ませてから実行するようにすると動く
do {
    $passward = readline("パスワード:");
} while ($passward !== "secret");
echo "ログイン成功";



// 無限ループ
for($i=1;$i < 6;$i++){
    print "{$i}番目のループです
}