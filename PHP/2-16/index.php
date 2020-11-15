<?php
    $testFile = "test.txt";//書き込みファイル
    $test_file = "test2.txt";//読み込みファイル
    $contents = "こんにちは！\n";
    
    if (is_writable($testFile)) {
        // 書き込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($testFile, "w");
        // 対象のファイルに書き込む
        fwrite($fp, $contents);
        // ファイルを閉じる
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!".'<br>';
    } else {
        // 書き込み不可のときの処理
        echo "not writable!".'<br>';
        exit;
    }

    if (is_readable($test_file)) {
      // 読み込み可能なときの処理
      // 対象のファイルを開く
      $fp = fopen($test_file, "r");
      // 開いたファイルから1行ずつ読み込む
      while ($line = fgets($fp)) {
          // 改行コード込みで1行ずつ出力
          echo $line.'<br>';
      }
      // ファイルを閉じる
      fclose($fp);
  } else {
      // 読み込み不可のときの処理
      echo "not readable!".'<br>';
      exit;
  }
?>