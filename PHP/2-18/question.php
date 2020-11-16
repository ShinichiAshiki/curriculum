<link rel="stylesheet" href="custamstyle.css">
<center>
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$questions1 = ["80", "22", "20", "21"];
$questions2 = ["PHP", "Python", "JAVA", "HTML"];
$questions3 = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<form action='answer.php' method='post'>
  <?php
  foreach( $questions1 as $value ){
    echo "<input type='radio' name='ans1'"; 
    echo "value='{$value}'/>{$value}";
  }
  ?>
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php
  foreach( $questions2 as $value ){
    echo "<input type='radio' name='ans2'"; 
    echo "value='{$value}'/>{$value}";
  }
  ?>
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php
  foreach( $questions3 as $value ){
    echo "<input type='radio' name='ans3'"; 
    echo "value='{$value}'/>{$value}";
  }
  echo "<input type='hidden' name='my_name'";
  echo "value='{$my_name}'/>";
?>
<br>
<input type="submit" value="回答する" />
  <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
</form>
</center>