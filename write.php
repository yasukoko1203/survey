<?php
// input.phpから送られてきたデータを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$food = $_POST["food"];

// データをカンマ区切りでまとめる（CSV形式）
// "\n" は改行という意味です
$str = $name . "," . $email . "," . $food . "\n";

// ファイルを開く（"a"は追記モードという意味）
$file = fopen("data.csv", "a");

// ファイルに書き込む
fwrite($file, $str);

// ファイルを閉じる
fclose($file);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>送信完了</title>
</head>
<body>
    <h1>送信しました！</h1>
    <p>ご協力ありがとうございます。</p>
    
    <ul>
        <li><a href="input.php">戻る</a></li>
        <li><a href="read.php">結果を見る</a></li>
    </ul>
</body>
</html>