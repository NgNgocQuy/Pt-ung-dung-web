<?php
class taobang{
	function chinhmau($dong){
		echo '<table width="500" border="1" align="center">
			  <tbody>
				<tr class="title">
				  <td width="52">STT</td>
				  <td width="135">Loại CPU</td>
				  <td width="158">Thông số kĩ thuật</td>
				  <td width="127">Giá thành</td>
				</tr>';
			for($i=1; $i<=$dong;$i++){
				if($i%2 == 0){
					echo '<tr class="chan">
						  <td>'.$i.'&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						</tr>';
				}
				else
				{
					echo '<tr >
						  <td>'.$i.'&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						</tr>';
				}
			}
		echo '</tbody>
			  </table>';
	}
}

?>