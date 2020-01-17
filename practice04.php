<?php
//1
function double ($i) {
  return $i * 2;
}
echo double(3)."\n";

//2
function add ($a, $b) {
  return $a + $b;
}
echo add(2,3)."\n";

//3
$arr = array(1,3,5,7,9);
function mulall($arr) {
  $total = 1;
  for ($i = 0; $i < count($arr); $i++) {
    $total *= $arr[$i];
  }
  return $total;
}
echo mulall($arr)."\n";

//4
$array = array(1,3,5,7,9);
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number <= $a){
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array($array);

//5
//strip_tags
echo (strip_tags('<ul class="information-list">
      <li>2017/05/01 2号店がドイツにてオープンしました。</li>
      <li>2017/04/01 春メニュー提供開始しました。</li>
      <li>2017/01/01 Battys Coffee Standオープンしました。</li>
    </ul>'));

//array_push
$orderedMenu = ["Carry"];
array_push($orderedMenu, "Coffee", "Salad");
print_r($orderedMenu);

//array_merge
$additionalMenu = ["Cake", "Tea"];
$orderedMenu = array_merge($orderedMenu, $additionalMenu);
print_r($orderedMenu);

//time
date_default_timezone_set('Asia/Tokyo');
$timestamp = time();
echo "現在,UTCで1970年1月1日午前0時0分0秒以来、{$timestamp}秒が経過した・・・。";

//date
echo date('Y年m月d日 H時i分s秒');
echo date('Y/m/d');