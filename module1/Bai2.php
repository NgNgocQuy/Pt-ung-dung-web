<?php
include ('source/mysource.php');
$p = new tinhtoan();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="400" height="88" border="1" align="center">
    <tr>
      <td width="204">so a</td>
      <td width="204"><label for="a"></label>
      <input type="text" name="a" id="a" /></td>
    </tr>
    <tr>
      <td>so b</td>
      <td><input type="text" name="b" id="b" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="+" id="+" value="+" />        <label for="+">
        <input type="submit" name="-" id="-" value="-" />
      </label>
        <input type="submit" name="*" id="*" value="*" />
      <label for="*"></label>
      <input type="submit" name="+4" id="+4" value="/" />
      <label for="+4"></label></td>
      <td>
      
      <?php
      	$a = $_post['a'];
      	$b = $_post['b']; 
		switch()
	  ?>
      
      &nbsp;
      </td>
    </tr>
  </table>
</form>
</body>
</html>