<?php
/*控制器（C）、模型（M）、视图（V） 调用实例化函数 */
function C($name,$method){
   require_once './libs/Controller/'.$name.'Controller.class.php';
   $controller = $name.'controller';
   $obj = new $controller();
   $obj->$method();
}
function M($name){
   require_once './libs/Model/'.$name.'Model.class.php';
   $model = $name.'Model';
   $obj = new $model();
   return $obj;
}
function V($name){
    require_once './libs/View/'.$name.'View.class.php';
    $View = $name.'View';
    $obj = new $View();
    return $obj;
}
function zhuanyi($str){
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}