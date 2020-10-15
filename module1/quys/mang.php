<?php 
include ("source/mysource.php");
$p = new mang();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<table width="100%" border="1" >
  
    <tr>
      <td width="573">
      <?php
	$n= 15;
	$a= array($n);
	$p->randommang($a,$n);
	echo '<div class="form2">';
	$p->xuatmang($a,$n);
	echo '</div>';
	echo '<div class="form2">';
	$p->xuatmangnguoc($a,$n);
	echo '</div>';
?></td>
      <td class = "aside1"; width="234">
      <?php
	echo '<div class="form1">';
	$p->demchan($a,$n);
	$p->tongsle($a,$n);
	
	$p->timMax($a,$n);
	$p->timMin($a,$n);
	echo '</div>';

?>
</td>
    </tr>
  
</table>

</body>
</html>