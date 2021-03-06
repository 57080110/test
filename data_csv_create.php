<?php
var_dump($_POST);
// exit();

// データの受取
$name = $_POST['name'];
$mail = $_POST['mail'];
$memo = $_POST['memo'];


// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
$write_data = "{$name} {$mail} {$memo}\n";

// ファイルを開く処理
$file = fopen('data/data.csv', 'a');

// ファイルロックの処理
flock($file, LOCK_EX);

// ファイル書き込み処理
fwrite($file, $write_data);

// ファイルアンロックの処理
flock($file, LOCK_UN);

// ファイルを閉じる処理
fclose($file);

// 入力画面へ移動
header("Location:data_csv_input.php");

// txtファイルへの書き込みのみ行うので表示する画面は存在しない
