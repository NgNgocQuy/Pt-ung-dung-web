<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="img">Chọn hình:</label>
    <input type="file" name="img" id="img">
  </p>
  <p>
    <label for="kichthuoc">Chọn kích thước:</label>
    <select name="kichthuoc" id="kichthuoc">
      <option value="200" selected="selected">200x200</option>
      <option value="300">300x300</option>
      <option value="400">400x400</option>
    </select>
  </p>
  <p>
    <input name="submit" type="submit" id="submit" formaction="showimg.php" formmethod="GET" value="Submit">
  </p>
</form>
</body>
</html>