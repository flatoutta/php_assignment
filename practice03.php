<?php
// 1
$name = "Kentaro Yoshioka";
if ($name = "Kentaro Yoshioka") {
  echo "私は{$name}です"."\n";
}else{
  echo "{$name}ではありません"."\n";
}

//2
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total."\n";

//3
$fruits = array("Apple", "Orange", "Banana", "Strawberry", "Grape");
foreach($fruits as $fruit) {
  echo $fruit ."\n";
}

//4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
for ($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i."\n";
  }
}


