<?
$form = [];
$error = [];
$form['num1'] = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_INT);
  if ($form['num1'] === '') {
    $error['num1'] = 'blank';
  }
  $form['num2'] = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_INT);
  if ($form['num2'] === '') {
    $error['num2'] = 'blank';
  }
  $form['operator'] = filter_input(INPUT_POST, 'operator', FILTER_SANITIZE_SPECIAL_CHARS);
  if ($form['operator'] === '') {
    $error['operator'] = 'blank';
  }
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
  switch ($form['operator']) {
    case '+':
      $answer = $form['num1'] + $form['num2'];
      break;
    case '-':
      $answer = $form['num1'] - $form['num2'];
      break;
    case '×':
      $answer = $form['num1'] * $form['num2'];
      break;
    case '÷':
      $answer = $form['num1'] / $form['num2'];
      break;
  };
  echo round($answer, 2);
  ?>
  <br>
  <a href="index.php">再度計算する</a>
</body>
</html>
