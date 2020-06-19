<?php
echo 'hello php!';

$name = "toshi" ;
if($name == "toshi") {
    echo "私はあなたの名前です";
} else {
    echo"あなたの名前ではありません";
}
echo "\n";
$total=0;    
for($i =1; $i<=10000; $i++){
    $total +=$i;
}
echo $total;
echo "\n";

$fruits = array("apple","banana","orange","lemon","grape");
for($i=0; $i<count($fruits); $i++){
    echo $fruits[$i];
    echo "\n";
}

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
for($i =1; $i<= 100; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0)
echo $i;
echo "\n";
}


