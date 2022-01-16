<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3章</title>
  <style>
  body {
    font-size: 3rem;
    color: #000000;
    margin: 5px;
    text-align: center;
  }
  </style>
</head>
<body>
  <?php
    $string1 = 'this is string';
    $string2 = "this is string";
    $string3 = 'hi,$string2 \n';//hi,$string2\n
    $string4 = "hi,$string2 \n";//hi,this is string2<改行>

    echo $string3,PHP_EOL;
    echo $string4;
    ?>
  <br>
  <?php
    $age = 15;

    echo "$ageyears old.",PHP_EOL;//スペースを空けずに表示したい
    echo "$age years old.",PHP_EOL;//15 years old.->半角スペースが入る
    echo "{$age}years old.",PHP_EOL;//15years old.->入らない
    ?>
  <br>
  <?php
  //ヒアドキュメントは左づめにしないとパースエラーが出るよ
$age = 15;

$foo = <<<EOI
ヒアドキュメントでは、このように、
複数行にわたる文章をそのまま表記することができます。
<br>
Tomの年齢は"$age"歳です。<br>
Tomの年齢は{$age}歳です。
EOI;

echo $foo;
?>
  <br>
  <?php
echo 15.0,PHP_EOL;//"15"で表示される
printf('%.1f',15.0);//15,0で表示される
?>
</body>
</html>