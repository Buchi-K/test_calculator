<?php
//数字を受け取る//
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$answer = '';
$operator = $_POST["operator"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>計算結果</title>
</head>
<body>
  <h2>計算結果</h2>
  <?php 
  if (!isset($num1) && !isset($num2) && !isset($operator)) {
    header('Location: index.php');
    exit();
  } else {
    switch ($operator) {
      case '+':
        $answer = $num1 + $num2;
        break;
      case '-':
        $answer = $num1 - $num2;
        break;
      case '×':
        $answer = $num1 * $num2;
        break;
      case '÷':
        $answer = $num1 / $num2;
        break;
    };
    echo round($answer, 2);
  }
  ?>
  <br>
  <a href="index.php">再度計算する</a>
</body>
</html>
