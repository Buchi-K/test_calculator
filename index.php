<?php
$answer = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $ope = $_POST['ope'];
  $num1_int = intval($num1);
  $num2_int = intval($num2);
  // $ope_int = intval($ope);
  // $_SESSION['num1'] = $num1_int;
  // $_SESSION['num2'] = $num2_int;
  // $_SESSION['ope'] = $ope_int;
  if (isset($num1_int) && isset($num2_int) && $ope) {
    switch ($ope) {
      case '+':
        $answer = $num1_int + $num2_int;
        break;
      case '-':
        $answer = $num1_int - $num2_int;
        break;
      case '*':
        $answer = $num1_int * $num2_int;
        break;
      case '/':
        $answer = $num1_int / $num2_int;
        break;
    }
  }
  if (isset($answer)) {
    echo round($answer, 2);
  }
  if ($num1 === '' || $num2 === '') {
    echo '数字を入力して下さい';
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
      
        <h2>計算方法を選んでください</h2>
        <select type='string' name="ope" value="">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">×</option>
          <option value="/">÷</option>
        </select>
      <br>
      <input type="submit" name="button" value="計算する">
    </form>
  </div>
</body>
</html>