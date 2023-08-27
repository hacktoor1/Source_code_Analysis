<?php
/*
	==================================================
	== remove unwated spaces ==> trim()		==
	== remove html tags      ==> strip_tags()	==
	== deactive html tags    ==> htmlspacialchars()	==
	== remove slaches        ==> stripcslaches()	==
	==================================================
*/
	function check($var){
	$var=trim($var);
	$var=strip_tags($var);
	$var=htmlspacialchars($var);
	$var=stripcslaches($var);
	return $var;	
	}

?>
