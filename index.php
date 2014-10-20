<?php
//引入配置文件
require './conf/config.inc.php';
//获得页面标示变量
if(isset($_GET['p'])){
    $p = $_GET['p'];
}elseif(isset($_POST['p'])){
    $p = $_POST['p'];
}else{
    $p = NULL;
}
//根据页面标示变量确定展示模块
switch ($p) {
    case 'about':
        $page = 'about.inc.php';
        $page_title = '关于我们';
        break;

    default:
        $page = 'main.inc.php';
        $page_title = '意传媒';
        break;
}
include 'includes/header.html'; 
include './modules/'.$page;
include 'includes/footer.html'; 