<meta charset="UTF-8">
<?php

date_default_timezone_set("Asia/Tokyo");//.dateを使用するために設定する必要がある

$link = mysql_connect('66f0b9f1dd5f','test','test');//(接続先DBホスト名,DB名,PASS)
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

    if (count($errors) === 0) {
        $sql = "insert into `post` (`name`, `comment`, `create_at`) values('"
            .mysql_real_escape_string($name)."','"
            .mysql_real_escape_string($comment)."','"
            .date('Y-m-d H:i:s')."')";

            mysql_query($sql,$link);//sql実行関数
            // mysql_close($link);
            // header('Location: http://' .$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    }

}
    $sql = "select * from `post` order by `create_at` desc";
    $result = mysql_query($sql,$link);

    $posts = array();
    if($result !== false && mysql_num_rows($result)) {
        while($post = mysql_fetch_assoc($result)){
            $posts[] = $post;
        }
    }

    mysql_free_result($result);
    mysql_close($link);

    include 'views/index-6-4_view.php';
?>