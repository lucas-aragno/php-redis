<?php

define('HOST','127.0.0.1');
define('PORT',6379);
define ('DB',0);

try{
	$redis = new Redis();
	$redis -> connect(HOST,PORT);
	$redis -> select(DB);
} catch (Exception $e){
	die('ERROR'.$e -> getCode().':'.$e -> getMessage());

}

?>