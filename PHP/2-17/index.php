<?php
//↓ループ文 × 条件分岐↓
    $blocks = 40;
    $i = 1;
    do{
        $dice = ( mt_rand() % 6 ) + 1;
        $blocks = $blocks - $dice;
        echo $i."回目=".$dice."<br>";
        $i++;
    }while(0 < $blocks);
    echo "合計".$i."回でゴールしました<br>";
//↑ループ文 × 条件分岐↑
//↓関数 × 条件分岐↓
//date("Y-m-d H:i:s");
    $now = date("H");
    echo "今".$now."時台です<br>";
    if( ( $now >= 18 && $now <= 24 ) ||
        ( $now >= 0 && $now <= 5 ) ){
        echo "こんばんは";
    }else if( $now > 5 && $now <= 10 ){
        echo "おはよう";
    }else if( $now > 10 && $now <= 18 ){
        echo "こんにちは";
    }
?>