<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    class SomeClass
    {}

    $a = new SomeClass;
    if($a instanceof SomeClass) {
        echo '$aはSomeClassのインスタンスです。',PHP_EOL;
    }
    ?>
  <br>
  <?php
    $param = isset($argv[1]) ? $argv[1]:'default';
    echo $param;
    // ↑↓ロジックが違うだけで結果は同じ
    if(isset($argv[1])) {
        $param = $argv[1];
    }else {
        $param = 'default';
    }

    echo $param;
    ?>
  <br>
  <?php
    $fruits =  array(
        'apple',
        'banana',
        'orange',
    );
    echo $fruits[0],PHP_EOL;
    // ↑↓ロジックが違うだけで結果は同じ
    $fruits[] = 'apple';
    $fruits[] = 'banana';
    $fruits[] = 'orange';

    echo $fruits[1],PHP_EOL;
    ?>
  <br>
  <?php
    $fruits_color = array(
        'apple' => 'red',
        'banana' => 'yellow',
        'orange' => 'orange',
    );
    echo $fruits_color['banana'],PHP_EOL;
    ?>
  <br>
  <?php
    $fruits_mixed = array(
        'peach',
        'blueberry',
        'apple' => 'red',
        'banana' => 'yellow',
        'orange' => 'orange',
    );
    echo $fruits_mixed[1],PHP_EOL;
    echo $fruits_mixed['banana'],PHP_EOL;
    ?>
  <br>
  <?php
        $array = array(
            4,
            5,
            1 => "これは1",
            'string_Key' => '最初の定義',
            'string_Key' => '次の定義',
        );
        var_dump($array);
        //キーが重複している場合上書きされる
    ?>
  <br>
  <?php
    $fruits = array(
        'apple' => array(
            'price' => 100,
            'count' => 2,
        ),
        'banana' => array(
            'price' => 150,
            'count' => 5,
        ),
        'orange' => array(
            'price' => 500,
            'count' => 3,
        ),
    );

    foreach ($fruits as $name=>$item) {
        # code...
        echo "$name は1つ {$item['price']}円で、{$item['count']}個です。",PHP_EOL;
    }
    ?>
  <br>
  <?php
    $a = array('a'=>1,'b'=>3,'c'=>5);
    $b = array('a'=>1,'c'=>5,'b'=>3);
    $c = array('a'=>1,'b'=>2);
    var_dump($a == $b);
    var_dump($a === $b);
    var_dump($a + $c);
    var_dump($c + $a);
    ?>
</body>
</html>