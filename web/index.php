<?php
echo "s";
require '../bootstrap.php';
require '../MiniBlogApplication.php';

$app = new MiniBlogApplication(false);
$app->run();