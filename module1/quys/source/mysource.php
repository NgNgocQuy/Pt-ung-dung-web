<?php
class mang{
	function randommang(&$a,$n){
		for($i=0; $i<$n;$i++){
			$a[$i] = rand(1,100);
		}
	}
	function xuatmang(&$a,$n){
		echo 'xuatmang<br>';
		for($i=0; $i<$n;$i++){
			echo '<div class ="arrStyle">'.$a[$i].'</div>' ;
		}
	}
	function xuatmangnguoc(&$a,$n){
		echo 'xuatmangnguoc:<br>';
		for($i=$n-1; $i>=0;$i--){
			echo '<div class ="arrStyle">'.$a[$i].'</div>' ;
		}
	}
	function demchan(&$a,$n){
		$sch=0;
		for($i=0; $i<$n;$i++){
			if($a[$i]%2==0)
				$sch++;
		}
		echo '<br><div class ="kq"> tong so chan:'.$sch.'</div>' ;
	}
	function tongsle(&$a,$n){
		$sl=0;
		for($i=0; $i<$n;$i++){
			if($a[$i]%2!=0)
				$sl+=$a[$i];
		}
		echo '<br><div class ="kq"> tong le:'.$sl.'</div>' ;
	}
	function timMax(&$a,$n){
		$max=0;
		for($i=0; $i<$n;$i++){
			if($a[$i]>$max)
				$max=$a[$i];
		}
		echo '</br><div class ="kq"> so lon nhat:'.$max.'</div>' ;
	}function timMin(&$a,$n){
		$min=$a[0];
		for($i=0; $i<$n;$i++){
			if($a[$i]<$min)
				$min=$a[$i];
		}
		echo '<br><div class ="kq"> so nho nhat:'.$min.'</div>' ;
	}
}
class b4{
	function duyetMang(&$list){
		foreach($list as &$value){
			echo $value;
			echo '<br>';
		}
	}
}

?>