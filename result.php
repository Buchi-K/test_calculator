<?
session_start();
$_SESSION['form_int'];
$_SESSION['error_int'];
$form = [];
$error = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $form['num1'] = $_POST['num1'];
  if ($form['num1'] === "") {
    $error['num1'] = "blank";
  } 
  $form['num2'] = $_POST['num2'];
  if ($form['num2'] === "") {
    $error['num2'] = "blank";
  } 
  $form['operator'] = $_POST['operator'];
  if ($form['operator'] === '') {
    $error['operator'] = 'blank';
  } 
}

$form_int = array_map('intval', $form);
$error_int = array_map('intval', $error);

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
  switch ($form_int['operator']) {
    case '1':
      $answer = $form_int['num1'] + $form_int['num2'];
      break;
    case '2':
      $answer = $form_int['num1'] - $form_int['num2'];
      break;
    case '3':
      $answer = $form_int['num1'] * $form_int['num2'];
      break;
    case '4':
      $answer = $form_int['num1'] / $form_int['num2'];
      break;
  };
  echo $answer;
  ?>
  <br>
  <a href="index.php">再度計算する</a>
</body>
</html>
