<?php
use Illuminate\Database\Capsule\Manager as Capsule;

//定义静态资源路径
define('PUBLIC_PATH', '/public');

//定义SITE_URL
define('SITE_URL', $_SERVER['HTTP_HOST']);

//view_path
define('VIEW_PATH', __DIR__.'/app/views/');

//Autoload 自动载入
require './vendor/autoload.php';

//载入淘客配置文件
require './config/tkConst.php';

//载入url加密
require './services/urlEncryption.php';

/*
//Eloquent ORM
$capsule = new Capsule;

$capsule->addConnection(require './config/database.php');

$capsule->bootEloquent();
*/

//whoops 错误提示
$whoops = new \Whoops\Run;

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();
