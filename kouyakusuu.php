<?php
$num = [2,10];
rsort($num);
var_dump($num);
$answer = $num[0] / $num[1];
var_dump($answer);
$answer = '';
function kou ($num) {
  while ($answer !== 0) {
    $answer = $num[0] % $num[1];
    echo $answer;
  }
}
kou($num);
?>