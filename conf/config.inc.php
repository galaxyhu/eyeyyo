<?php
$prject_name = '/eyeyyo/';
$contact_email = 'vistahu@126.com';
$documentRoot = $_SERVER['DOCUMENT_ROOT'].$prject_name;
$host = substr($_SERVER['HTTP_HOST'],0,5);
if(in_array($host, array('local','127.0','192.1'))){
    $local = TRUE;
}else{
    $local = FALSE;
}
if($local){
    $debug = TRUE;
    
    define('BASE_URI',$documentRoot);
    define('BASE_URL', 'http://localhost'.$prject_name);
    define('DB', $_SERVER['DOCUMENT_ROOT'].$prject_name.'conf/mysql.inc.php');
}else{
    define('BASE_URI',$documentRoot);
    define('BASE_URL', 'http://zz1024.com/');
    define('DB', $_SERVER['DOCUMENT_ROOT'].$prject_name.'conf/mysql.inc.php');
}
if(!isset($debug)){ $debug = FALSE; }

require $documentRoot.'libs/function.php';