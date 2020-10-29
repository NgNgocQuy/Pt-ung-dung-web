<?php include ("source/mysource.php");
$p = new uploadFile();
?>
<!doctype html>
<html>

<body>
<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="myfile">Chọn hình:</label>
    <input type="file" name="myfile" id="myfile">
  </p>
  <p>
    <input type="submit" name="nut" id="nut" value="Submit">
  </p>
</form>
<?php
	switch($_POST['nut'])
	{
		case 'Submit':
		{
			$local = $_FILES['myfile']['tmp_name'];
			$name = $_FILES['myfile']['name'];
			$size = $_FILES['myfile']['size'];
			$type = $_FILES['myfile']['type'];
			echo $local;
			echo '<br/>';
			echo $name;
			echo '<br/>';
			echo $size;
			echo '<br/>';
			echo $type;
			
			if($size>=1024*1024)
			{
				echo 'kích thước file phải nhỏ hơn 1MB';
			}
			else
			{
				if($p->upload($local,'data',$name)==1)
				{
					echo '<p><br>uploaded<p/>';
				}
			}
		}
	}
?>

</body>
</html>