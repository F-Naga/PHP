<?php
//数値を2倍にして返す//
function double($i){
  return $i*2;
}
  echo double(4)."\n";

//$aと$Bを足した値を表示// 
function add($a,$b){
    return $a+$b;
}
  echo add(3,8)."\n";

//配列内の要素を全てかけた値を表示//  
function times($arr){
    $total = 1;
    foreach ($arr as $ar){
    $total *= $ar;
    }
    return $total;
}
  echo times(array(1,3,5,7,9))."\n";

//配列の中で一番大きい値を返す// 
function max_array($arr){
  $max_number = $arr[0];
  foreach ($arr as $a) {
    if ($max_number<$a){
      $max_number=$a;
    }
  } 
    return $max_number;
}
    echo max_array(array(1,5,7,8,3))."\n";
  
  //htmlのタグを取り除く//
  $str = "<h1>関数の値</h1>"."\n";
  echo strip_tags($str);
  
  //配列に値を追加//
  $a = [1,2,3];
  array_push($a,4,5);
  var_dump($a)."\n";
  
  //配列同士をつなげる//
  $array1 = [3,6,7,1];
  $array2 = [2,5,7,13];
  $array = array_merge($array1,$array2);
  print_r($array)."\n";
  
  //指定した日時のタイムスタンプを取得//
  echo time()."\n";
  echo mktime(11,0,0,7,18,2022)."\n";
  
  //現在の日時を表示//
  echo date('Y-m-d');