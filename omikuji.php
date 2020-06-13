<?php
// phpタグの中身はサーバで実行される

// 乱数の生成
$rand = rand(1, 5);

// 条件分岐
if ($rand == 1) {
  $result = '大吉';
} elseif ($rand == 2) {
  $result = '中吉';
} elseif ($rand == 3) {
  $result = '小吉';
} elseif ($rand == 4) {
  $result = '凶';
} elseif ($rand == 5) {
  $result = '大吉';
} else {
  $reslt = 'エラー';
}

//echo $result

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>おみくじアプリ</title>
</head>

<body>
  <h1>今日の運勢は<?= $result ?>です</h1>
</body>

</html>

<!-- 
// 動作確認

// PHPのあとにhtmlを追加しよう
// !->tabでフォーマット作成が可能（通常のhtmlファイルと同様）

// 動作確認
// サーバでPHPが実行->生成されたhtmlがブラウザに送られて表示される

// htmlと組み合わせるときはPHPタグを省略しないこと（PHPとhtmlの区別がつかなくなるため） -->