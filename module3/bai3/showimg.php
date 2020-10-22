<?php include ("source/source.php");
$p = new hinh();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<p>
  <?php
	$img = $_REQUEST['img'];
	$kichthuoc = $_REQUEST['kichthuoc'];
	$p->kichthuoc($kichthuoc,$img);
?>

</body>
</html>