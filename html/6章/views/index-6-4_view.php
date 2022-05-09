<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ひとことけいじばん</title>
</head>
<body>
  <h1>ひとこと掲示板だお</h1>

  <form action="index-6-4.php" method="POST">
    <?php if(count($errors)): ?>
    <ul class="erro_list">
      <?php foreach ($errors as $error): ?>
      <li>
        <?php echo htmlspecialchars($error,ENT_QUOTES,'UTF-8') ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php endif ?>
    名前:<input type="text" name="name"><br>
    ひとこと<input type="text" name="comment" size="60"><br>
    <input type="submit" value="送信">
  </form>
  <?php
    // $sql = "select * from `post` order by `create_at` desc";
    // $result = mysql_query($sql,$link);
  ?>

  <!-- <?php if($result !== false && mysql_num_rows($result)): ?>
  <ul>
    <?php while($posts = mysql_fetch_assoc($result)): ?>
    <li>
      <?php echo htmlspecialchars($posts['name'],ENT_QUOTES,'UTF-8'); ?>:
      <?php echo htmlspecialchars($posts['comment'],ENT_QUOTES,'UTF-8'); ?>:
      -<?php echo htmlspecialchars($posts['create_at'],ENT_QUOTES,'UTF-8'); ?>;
    </li>
    <?php endwhile; ?>
  </ul>
  <?php endif; ?> -->

  <?php if(count($posts) > 0): ?>
  <ul>
    <?php foreach($posts as $post): ?>
    <li>
      <?php echo htmlspecialchars($post['name'],ENT_QUOTES,'UTF-8'); ?>:
      <?php echo htmlspecialchars($post['comment'],ENT_QUOTES,'UTF-8'); ?>:
      -<?php echo htmlspecialchars($post['create_at'],ENT_QUOTES,'UTF-8'); ?>;
    </li>
    <?php endforeach ?>
  </ul>
  <?php endif ?>


  <!-- <?php
    mysql_free_result($result);
    mysql_close($link);
  ?> -->
</body>
</html>