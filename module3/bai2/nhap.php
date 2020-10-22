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
<form id="form1" name="form1" method="post">
  <label for="txtn">Nhập số dòng :</label>
  <input type="text" name="txtn" id="txtn">
  <input name="nut" type="submit" id="nut" formaction="xuat.php" formmethod="GET" value="tạo bảng">
</form>
</body>
</html>