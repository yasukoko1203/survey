<html>
<head>
    <meta charset="utf-8">
    <title>アンケート結果</title>
</head>
<body>
    <h1>アンケート結果</h1>
    
    <table border="1">
        <tr>
            <th>名前</th>
            <th>Email</th>
            <th>好きな食べ物</th>
        </tr>

        <?php
        // ファイルを読み込みモード("r")で開く
        $file = fopen("data.csv", "r");

        // ファイルの中身を1行ずつ読み込むループ処理
        while ($line = fgets($file)) {
            // カンマ区切りのデータを配列（バラバラ）にする
            $data = explode(",", $line);
            
            echo "<tr>";
            echo "<td>" . $data[0] . "</td>"; // 名前
            echo "<td>" . $data[1] . "</td>"; // Email
            echo "<td>" . $data[2] . "</td>"; // 食べ物
            echo "</tr>";
        }

        // ファイルを閉じる
        fclose($file);
        ?>
    </table>
    
    <a href="input.php">入力画面に戻る</a>
</body>
</html>