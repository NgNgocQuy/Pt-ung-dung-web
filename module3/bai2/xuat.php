<?php include ("source/mysource.php");
$p = new taobang();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<?php
	$dong = $_REQUEST['txtn'];
	if($_GET['nut'] == 'tạo bảng' && $dong != ''){
		$p->chinhmau($dong);
	}
?>
</body>
</html>