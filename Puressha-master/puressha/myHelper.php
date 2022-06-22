<?php
function confirmLogin(){
	session_start();
	if(isset($_SESSION["myid"]) && isset($_SESSION["mypass"])){
		return 1;
	}
	return 0;
}
function checkCart(){
	session_start();
	if(isset($_SESSION["cart"]) && $_SESSION["cart"]!=null){
		return 1;
	}
	return 0;
}
function findArray($value, $array){
	$i=0;
	foreach($array as $a){
		if (in_array($value,$a)) return $i;
		$i++;
	}
	return -1;
}
function testAmount($p, $qty){
	$PDe = new chitietsanpham();
	$ProdDe = $PDe->getByMCTSP($p);
	$r = $ProdDe->fetch_assoc();
	
	
	if($r['SO_LUONG'] >= $qty)
		return 1;
	return 0;
}

switch($_POST['button'])
    {
        case 'Add to Cart':
		{
			$p = $_REQUEST['prod'];
			$pD = $_REQUEST['prodD'];
			
			session_start();
			if(checkCart()) {
				$list = $_SESSION["cart"];
				$i = count($list);
				$j = findArray($pD, $list);
				if($j == -1){
					if(testAmount($pD, 1))
						$list[$i]= array($p, $pD, 1);
					else {echo "<script>alert('Đã hết hàng không thể đặt thêm');</script>";
						  exit;
						 }	
				}
				else {
					if(testAmount($pD, $list[$j][2]+1))
						$list[$j][2]++;
					else {echo "<script>alert('Đã hết hàng không thể đặt thêm');</script>";
						  exit;
						 }
				}
			}
			else {
				$list[0]= array($p, $pD, 1);
			}
				$_SESSION["cart"] = $list;
			
			break;
		}
		case 'Del to Cart':
		{
			$pD = $_REQUEST['prodD'];
			
			session_start();
			
			$list = $_SESSION["cart"];
			array_splice($list,findArray($pD, $list),1);
			$_SESSION["cart"] = $list;
			break;
		}
}
?>