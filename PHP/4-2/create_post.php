<?php
// db_connect.phpの読み込み
require_once('db_connect.php');
// function.phpの読み込み
require_once('function.php');
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
// 提出ボタンが押された場合
if (!empty($_POST)) {
    // titleとcontentの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '日付が未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未入力です。';
    }

    if (!empty($_POST["title"]) && !empty($_POST["date"]) &&!empty($_POST["stock"])) {
        // 入力したtitleとcontentを格納
        $title = $_POST["title"];
        $date = $_POST["date"]; 
        $stock = $_POST["stock"]; 
        // PDOのインスタンスを取得
        $pdo = db_connect();
        try {
            // SQL文の準備
            $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindParam(':title', $title);
            // 日付をバインド
            $stmt->bindParam(':date', $date);
            // 在庫数をバインド
            $stmt->bindParam(':stock', $stock);
            // 実行
            $stmt->execute();
            echo '登録しました。';
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage(); 
            // 終了
            die(); 
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1>本登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="title" id="title" class="input-form" placeholder="タイトル"><br>
        <input type="text" name="date" id="date" class="input-form" placeholder="発売日"><br>
        在庫数<br>
        <input type="number" name="stock" id="stock" class="count-form" min="0" step="1" placeholder="選択してください"><br>
        <input type="submit" value="登録" id="post" class="button blue-btn" name="post">
    </form>
    <!-- <br><a href="main.php">在庫一覧画面</a> -->
</body>
</html>