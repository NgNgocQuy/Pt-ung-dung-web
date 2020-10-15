<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="500" border="1" align="center">
    <tbody>
      <tr>
        <td width="234">user name</td>
        <td width="250"><input type="text" name="txtuser" id="txtuser"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="text" name="txtpass" id="txtpass"></td>
      </tr>
      <tr>
        <td colspan="2"><p>
          <input name="submit" type="submit" id="submit" formaction="dologin.php" formmethod="POST" value="Submit">
          <input type="reset" name="reset" id="reset" value="Reset">
        </p></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>