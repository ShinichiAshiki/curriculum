<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
// ログイン画面に戻る
header("Location: login.php");
?>