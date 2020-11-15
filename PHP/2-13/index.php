<?php
  //切り捨て ceil
  echo ceil(5.235);
  echo"<br>";
  //切り上げ floor
  echo floor(5.235);
  echo"<br>";
  //四捨五入 round
  echo round(5.235);
  echo"<br>";
  //円周率の表示 pi
  echo pi();
  echo"<br>";

  //乱数が均等なのか mt_rand
  define("loop", 6000000);
  $i = 0;
  $results = [0,0,0,0,0,0];
  do{
    $dice = mt_rand() % 6;
    $results[$dice]++;
    //echo $dice."→".$results[$dice]."<br>";
    $i++;
  }while($i < loop);
  
  for($i = 0; $i < 6; $i++){
    echo ($i + 1).":".($results[$i] / loop);
    echo"<br>";
  }

  //文字の長さ strlen
  echo strlen("ShinichiAshiki");
  echo"<br>";
  //文字検索 strpos
  echo strpos("ShinichiAshiki","Ashi");
  echo"<br>";
  //文字切り取り substr
  echo substr("ShinichiAshiki",-6,6);
  echo"<br>";
  //置換 str_replace
  echo str_replace("Ashiki","Suzuki","ShinichiAshiki");
  echo"<br>";
  //文字列出力 printf
  printf("%sは今年で%dです<br>","Ashiki",26);
  //変数に代入できるprintf sprintf
  $output = sprintf("%sは今年で%dですヨ","Ashiki",26);
  echo $output;
?>