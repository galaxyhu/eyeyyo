<?php
if(!defined('BASE_URL')){
    require '../conf/config.inc.php';
    
    $url = BASE_URL.'index.php';
    header("Location:$url");
    exit;
}
?>