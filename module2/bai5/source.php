<?php
class tinh{
	function tinhgiaithua($n){
		$kq=1;
		for($i=1; $i<=$n;$i++){
			$kq= $kq* $i;
		}
			return $kq;
	}
}
?>