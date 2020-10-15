<?php include ("source.php");
$p = new tinh();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <p>
    <label for="textfield">Nhap:</label>
    <input type="text" name="textfield" id="textfield">
  </p>
  <p>
    <?php
	$n = $_REQUEST['textfield'];
	echo 'ket qua la:';
	if($n>0)
		echo $p->tinhgiaithua($n);
	else
		echo 'nhap sai!!!!!';
	
	?>
  </p>
</form>
</body>
</html>