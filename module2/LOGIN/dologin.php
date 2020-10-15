<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

	$user = $_REQUEST['txtuser'];
	$pass = $_REQUEST['txtpass'];
	
	if($user== 'admin' && $pass == 1234)
	{
		echo 'hello : ' . $user;	
	}
	else{
		echo 'sai tai khoan.';
	}

?>

</body>
</html>