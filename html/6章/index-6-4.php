<meta charset="UTF-8">
<?php

$link = mysql_connect('d411bcb93a96','test','test');
if(!$link) {
    die('データベースに接続できません:' . mysql_error());
}

mysql_select_db('test',$link);
$errors = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = null;

    if (!isset($_POST['name']) || !strlen($_POST['name'])) {
        $errors['name'] = '名前を入力してください';
    }elseif (strlen($_POST['name']) > 40) {
        $errors['name'] = '名前は40文字以内で入力してください';
    }else {
        $name = $_POST['name'];
    }

    $comment = null;

    if (!isset($_POST['comment']) || !strlen($_POST['comment'])) {
        $errors['comment'] = 'コメントを入力してください';
    }elseif (strlen($_POST['comment']) > 200) {
        $errors['comment'] = 'コメントは200文字以内で入力して下さい';
    }else {
        $comment = $_POST['comment'];
    }

    $date = date_default_timezone_set('Y-m-d');

    if (count($errors) === 0) {
        $sql = "insert into `post` (`name`, `comment`, `created_at`) values('"
            .mysql_real_escape_string($name) . "','"
            .mysql_real_escape_string($comment) . "','"
            .date_default_timezone_set('Y-m-d H:i:s') . "')";

            mysql_query($sql,$link);
    }
}

?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ひとことけいじばん</title>
</head>
<body>
  <h1>ひとこと掲示板</h1>
  <?php echo $date; ?>
  <form action="index-6-4.php" method="POST">
    名前:<input type="text" name="name"><br>
    ひとこと<input type="text" name="comment" size="60"><br>
    <input type="submit" value="送信">
  </form>
</body>
</html>