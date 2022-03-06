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
    <form action="result.php" method="post">
      <h1>計算機</h1>
      <ul>数字を入力してください</ul>
      <input type="string" name="num1" value="">
      <input type="string" name="num2" value="">
      <form action="result.php" method="post">
        <h2>計算方法を選んでください</h2>
        <select name="operator">
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