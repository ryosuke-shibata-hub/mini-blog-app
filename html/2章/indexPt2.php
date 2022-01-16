<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>perfectPHP->page46~58p</title>
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
  Hello
  <strong>
    <?php
        echo htmlspecialchars($_GET['name'],ENT_QUOTES)
    ?>
  </strong>
  <br>
  <?php
  define('BOOK','Perfect PHP');
  echo BOOK,PHP_EOL;

  const BOOKs = 'Perfect PHP';
  echo BOOKs,PHP_EOL;
  ?>
  <br>
  <?php
  define('bookBook','Perfect PHP');
  $value = 'bookBook';
  echo $value,PHP_EOL;
  echo constant($value),PHP_EOL;?>
  <br>
  <?php

  ?>
</body>
</html>