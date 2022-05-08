<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>hello world</p>
  <?php
  $hour = date('H:i');
  ?>

  <?php if (5 <= $hour && $hour < 10): ?>
  <p>おはようございます</p>

  <?php elseif (10 <= $hour && $hour < 18): ?>
  <p>こんにちは</p>

  <?php else: ?>
  <p>こんばんは</p>

  <?php endif; ?>

  <p>現在は<?php echo $hour; ?>分です</p>
</body>
</html>