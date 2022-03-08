<?php
session_start();
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
$_SESSION['form_int'] = $form_int;
$error_int = array_map('intval', $error);
$_SESSION['error_int'] = $error_int;

if (isset($form_int['num1']) && isset($form_int['num2']) && isset($form_int['operator'])) {
    header('Location: result.php');
  }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>最大公約数</title>
</head>
<body>
  <div id="container">
    <form action="" method="post">
      <h1>計算機</h1>
      <ul>数字を入力してください</ul>
      <input type="string" name="num1" value="">
      <input type="string" name="num2" value="">
      <!-- 片っぽだけでも入力されていればいいことになっているから修正 -->
      <?php
      if (isset($error['num1']) &&  $error['num1'] === 'blank' && isset($error['num2']) && $error['num2'] === 'blank'): ?>
        <p class='error'>* 数字の入力は必須です</p>
      <?php endif; ?>
        <h2>計算方法を選んでください</h2>
        <select type='string' name="operator" value="">
          <option value="1">+</option>
          <option value="2">-</option>
          <option value="3">×</option>
          <option value="4">÷</option>
        </select>
      <br>
      <input type="submit" name="button" value="計算する">
    </form>
  </div>
</body>
</html>