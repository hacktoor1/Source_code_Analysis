<?php
/*
							======================================
							===				   ===
							===		XSS	           ===
							===				   ===
							===				   ===
							======================================

*/
//<=============================================================================================================================================>
//<==============================================================> Not fixed code <=============================================================>
//<=============================================================================================================================================>
//====>PHP_code_first
if( array_key_exists( 'show', $_POST ) && $_POST[ 'show' ] != NULL ){
	$first_name=$_POST['first_name'];
	echo "<pre>hello".$first_name."</pre>";
}

?>
//====>HTML_code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post">
            <input type="text" name="first_name"><br>
	    <input type="submit" value="submit">
</body>
</html>
//<============================================================================================================================================>
//<============================================================> fixed code <==================================================================>
//<============================================================================================================================================>
//=====>PHP_code
<?php
require 'function.php';
if( array_key_exists( 'show', $_POST ) && $_POST[ 'show' ] != NULL ){
        $first_name=check($_POST['first_name']);
        echo "<pre>hello".$first_name."</pre>";
}
?>
//======>HTML_code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post">
            <input type="text" name="first_name"><br>
            <input type="submit" value="submit">
</body>
</html>



