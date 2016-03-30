<?php

	define('ROOT_PATH',  $_SERVER['PHP_SELF']);
	define('ROOT_PATH_URL',   $_SERVER['SERVER_NAME']);
	get_avatar(1);
	
	 function get_avatar($uid, $size = '', $returnsrc = TRUE) {
		if($uid > 0) {
		   $size = in_array($size, array('big', 'middle', 'small')) ? $size : 'middle';
		   $uid = abs(intval($uid));
		   $uid = sprintf("%09d", $uid);
		    $dir1 = substr($uid, 0, 3);
		    $dir2 = substr($uid, 3, 2);
		    $dir3 = substr($uid, 5, 2);
		   if($returnsrc) {
		    	echo   ROOT_PATH_URL.'/upload/avatar/'.$dir1.'/'.$dir2.'/'.$dir3.'/'.substr($uid, -2).'_avatar_'.$size.'.jpg';
		   } else {

		    	echo   ROOT_PATH.'/upload/avatar/'.$dir1.'/'.$dir2.'/'.$dir3.'/'.substr($uid, -2).'_avatar_'.$size.'.jpg';

		   }
		   //imgmgc
		} 

	}


