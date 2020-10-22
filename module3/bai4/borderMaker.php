<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div align="center" >
  <form id="form2" name="form2" method="post" action="">
    
    <textarea name="text" id="text" cols="80" rows="7">
    	Fawkes đã cải sang đạo Công giáo và đi đến lục địa Châu Âu để chiến đấu cho Công giáo Tây Ban Nha trong cuộc Chiến tranh Tám Mươi Năm chống lại nhóm cải cách Tin lành Hà Lan ở miền đất Hạ. Ông đến Tây Ban Nha nhằm tìm kiếm sự hỗ trợ cho cuộc nổi loạn ủng hộ Công giáo ở Anh, nhưng không thành công. Sau đó ông gặp Thomas Wintour và cùng nhau quay trở lại Anh. Wintour đã giới thiệu Fawkes với Robert Catesby, người đã lên kế hoạch ám sát Vua James I để khôi phục quốc vương theo Công giáo. Những người lập mưu đã thuê một căn hầm dưới Viện Quý tộc; cũng là chỗ Fawkes được giao nhiệm vụ bảo vệ kho thuốc súng.
    </textarea>
  </form>
</div>
<br />

<form id="form1" name="form1" method="post" action="">
  <table width="318" height="147" border="1" align="center">
    <tr>
      <td width="106" height="44">Border Style</td>
      <td colspan="2">Border Size</td>
    </tr>
    <tr>
      <td height="95"><label for="borderStyle"></label>
        <select name="borderStyle" size="1" id="borderStyle">
          <option value="dotted">dotted</option>
          <option value="solid">solid</option>
          <option value="double">double</option>
      </select></td>
      <td width="88"><p>
        <label>
          <input type="radio" name="size" value="1" id="RadioGroup1_0" />
          1</label>
        <br />
        <label>
          <input type="radio" name="size" value="5" id="RadioGroup1_1" />
          5</label>
        <br />
        <label>
          <input type="radio" name="size" value="10" id="RadioGroup1_2" />
          10</label>
        <br />
      </p>        <label for="size"></label></td>
      <td width="102"><p>
        <label>
          <input type="radio" name="color" value="red" id="color_0" />
          red</label>
        <br />
        <label>
          <input type="radio" name="color" value="green" id="color_1" />
          green</label>
        <br />
        <label>
          <input type="radio" name="color" value="blue" id="color_1" />
          blue</label>
        <br />
      </p></td>
    </tr>
  </table>
</form>
	
<?php
	$txt= $_REQUEST['txt'];
	$borderStyle = $_REQUEST['borderStyle'];
	$borderStyle = $_REQUEST['borderStyle'];

?>
    
</body>
</html>