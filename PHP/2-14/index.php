<?php
  $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
  //要素の数 count
  echo count($members);
  echo"<br>";
  //並べ替え sort
  var_dump($members);
  echo"<br>";
  //存在確認 in_array
  var_dump(in_array("Suzuki",$members));
  echo"<br>";
  //配列の結合 implode
  $im_members = implode("@",$members);
  var_dump($im_members);
  echo"<br>";
  //文字列の配列化 explode
  $re_members = explode("@",$im_members);
  var_dump($re_members);
  echo"<br>";