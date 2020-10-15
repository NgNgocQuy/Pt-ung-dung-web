<?php include ("process.php");
$p = new tinhtoan();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="700" border="1" align="center">
    <tbody>
      <tr>
        <td width="213">a = 
          <input type="text" name="txta" id="txta"></td>
        <td width="213">b = 
          <input type="text" name="txtb" id="txtb"></td>
        <td width="252"><input type="submit" name="nut" id="nut" value="+">
        <input type="submit" name="nut" id="nut" value="-">
        <input type="submit" name="nut" id="nut" value="*">
        <input type="submit" name="nut" id="nut" value="/"></td>
      </tr>
      <tr>
        <td colspan="3">
        <?php
			$a = $_REQUEST['txta'];
			$b = $_REQUEST['txtb'];
			switch($_POST['nut']){
				case'+':{
					echo $a;
					echo ' + ';
					echo $b;
					echo ' = ';
					echo $p->cong($a,$b);
					break;
					}	
				case'-':{
					echo $a;
					echo ' - ';
					echo $b;
					echo ' = ';
					echo $p->tru($a,$b);
					break;
					}	
				case'*':{
					echo $a;
					echo ' * ';
					echo $b;
					echo ' = ';
					echo $p->nhan($a,$b);
					break;
					}	
				case'/':{
					echo $a;
					echo ' / ';
					echo $b;
					echo ' = ';
					echo $p->chia($a,$b);
					break;
					}	
				
			}
			
		?>
        
        &nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>