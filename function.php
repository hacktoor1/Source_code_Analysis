<?php
/*
	==================================================
	== remove unwanted spaces ==> trim()		==
	== remove html tags      ==> strip_tags()	==
	== deactive html tags    ==> htmlspecialchars()	==
	== remove slashes        ==> stripcslashes()	==
	==================================================
*/
	function check($var){
	$var=trim($var);
	$var=strip_tags($var);
	$var=htmlspecialchars($var);
	$var=stripcslashes($var);
	return $var;	
	}

?>
