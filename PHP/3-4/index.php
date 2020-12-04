<?php
//session_start();
include_once("pdo.php");
require("getData.php");

//ユーザ情報の取得
try {
    $usersDatas = new getData;
    $firstName = $usersDatas->getUserData()['first_name'];
    $lastName = $usersDatas->getUserData()['last_name'];
    $lastLogin = $usersDatas->getUserData()['last_login'];

    $userposting = $usersDatas->getPostData();
    while ($row = $userposting->fetch(PDO::FETCH_ASSOC)) {
        $postId[]=$row['id'];
        $postTitle[]=$row['title'];
        switch($row['category_no']){
            case 1:
                $cate = '食事';
            break;
            case 2:
                $cate = '旅行';
            break;
            default:
            $cate = 'その他';
        }
        $postCategory[]=$cate;
        $postComment[]=$row['comment'];
        $postCreated[]=$row['created'];
    }

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <img src="img/Y&I.png" alt="" class="yandiImg">
    </div>
    <div class="welcome-user">ようこそ <?php echo $lastName.$firstName;?>さん</div>
    <div class="last-login">最終ログイン日：<?php echo $lastLogin;?></div>
    <br>
    <table>
        <tr>
            <th class=>記事ID</th>
            <th class=>タイトル</th>
            <th class=>カテゴリ</th>
            <th class=>本文</th>
            <th class=>投稿日</th>
        </tr>
    <?php
        for($i = 0; $i < count($postId); $i++){
            echo '<tr>';
            echo '<td>'.$postId[$i].'</td>';
            echo '<td>'.$postTitle[$i].'</td>';
            echo '<td>'.$postCategory[$i].'</td>';
            echo '<td>'.$postComment[$i].'</td>';
            echo '<td>'.$postCreated[$i].'</td>';
            echo '</tr>';
        }
    ?>
    </table><br>
    <div class="footer">Y&I group.inc</div>
</body>
</html>