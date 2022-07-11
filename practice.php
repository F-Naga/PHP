<?php
$name = "fumiyuki nagashima";
if ($name = "fumiyuki nagashima") {
    echo "私は".$name."です";
}   else {
    echo "あなたの名前ではありません";
}
//nameの値が表示される//

$total = 0;
for($i = 1; $i <=10000; $i++){
    $total += $i;
}
echo $total;
//1から10000までの合計を表示//

$fruits = array("apple","banana","orange","grape","strawberry");

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
//furuitsを順番に表示//

for($i = 1; $i <=100; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}