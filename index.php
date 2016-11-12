<?php
//短标签
ini_set("short_open_tag", "On");

//定义错误类别
//ini_set("error_reporting","E_ALL & ~E_NOTICE");

//定义base_path
define('BASE_PATH', __DIR__);

//启动器
require BASE_PATH.'/bootstrap.php';

//路由配置,开始处理
require BASE_PATH.'/config/routes.php';