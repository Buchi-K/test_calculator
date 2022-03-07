<?php
$form = [];
$error = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
  if (isset($form['num1']) && isset($form['num2']) && isset($form['operator'])) {
    header('Location: result.php');
  }
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
        <p class='error'>数字の入力は必須です</p>
      <?php endif; ?>
        <h2>計算方法を選んでください</h2>
        <select type='text' name="operator" value="">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="×">×</option>
          <option value="÷">÷</option>
        </select>
      <br>
      <input type="submit" name="button" value="計算する">
    </form>
  </div>
</body>
</html>