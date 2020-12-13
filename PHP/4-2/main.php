<?php
// function.phpの読み込み
require_once('function.php');
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
// db_connect.phpの読み込み
require_once('db_connect.php');
// PDOのインスタンスを取得 FILL_IN
$pdo = db_connect();
try { 
    // SQL文の準備 FILL_IN 
    $sql = "SELECT * FROM books";
    // プリペアドステートメントの準備 FILL_IN
    $stmt = $pdo->prepare($sql);
    // 実行 FILL_IN
    $stmt->execute();
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage(); 
    // 終了
    die(); 
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <title>メイン</title>
</head>
<body>
    <h1>在庫一覧画面</h1>
    <br><a href="create_post.php" class="blue-btn button">新規登録</a>
    <a href="logout.php" class="logout-button button">ログアウト</a>
    <br>
    <br>
    <table>
        <tr>
            <th>タイトル</th>
            <th>発売日</th>
            <th>在庫数</th>
            <th></th>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><a href="delete_post.php?id=<?php echo $row['id']; ?>" class="button delete-btn">削除</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>