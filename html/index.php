<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>php7.2-apache</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <!-- PHP_EOL => 改行のため(ブラウザ上では<br>) -->
  <?php
    $var = 1;
     var_dump(isset($var));
     var_dump(isset($var1));
    ?>
  <br>
  <?php
     $var = 1;
     $var_name = 'var';
     echo $$var_name,PHP_EOL;
    ?>
  <br>
  <?php
    $array = array('1,2,3,4,5');
    foreach ($array as $i) {
        # code...
        echo $i,PHP_EOL;
    }
    echo "last:",$i,PHP_EOL;
    ?>
  <br>
  <?php
    $foo = 1; //ここがグローバルスコープ
    function some_function() { //ここがローカルスコープ
        $foo = 10;  //ローカルスコープないで$fooを変更(更新)してもスコープが違うので
                    //この場合はローカルスコープで新しい変数を定義したことになる。
        echo $foo,PHP_EOL;
         //10
        $bar = 20;

        global $foo;//ローカルスコープ内でグローバルスコープで定義された変数を参照する場合
        echo $foo,PHP_EOL;// 1
    }

    some_function();
    echo $foo,PHP_EOL;//1
    echo $bar,PHP_EOL;//グローバルスコープでは定義していないのでnull
    ?>
  <br>
  <?php
    $global_test = 1;

    echo $global_test,PHP_EOL;
    echo $GLOBALS['global_test'],PHP_EOL;//全てのグローバル変数を連想配列で参照
    echo $GLOBALS['foo'],PHP_EOL;
    ?>
</body>
</html>