<?php
    header('Content-Type: application/json');
    include_once("../../handleData/classes/donhang.php");
	
	$ord = new donhang();


    $data = array(array("Thang"=>1,"TT"=>0),array("Thang"=>2,"TT"=>0),array("Thang"=>3,"TT"=>0),array("Thang"=>4,"TT"=>0),array("Thang"=>5,"TT"=>0),array("Thang"=>6,"TT"=>0),array("Thang"=>7,"TT"=>0),array("Thang"=>8,"TT"=>0),array("Thang"=>9,"TT"=>0),array("Thang"=>10,"TT"=>0),array("Thang"=>11,"TT"=>0),array("Thang"=>12,"TT"=>0));

	for ($x = 0; $x <= 3; $x++) {
	   $data2[$x] =array("Quy"=>$x+1,"TT"=>0);
	}
	
	$data3 = array(array("Nam"=>'2020',"TT"=>0));

	$order = $ord->tkDonhang_M();
	if($order){
		while($result = $order->fetch_array()){
			$data[$result['THANG']-1]['TT'] = $result['TONG_DOANH_THU'] ;
		}
	}
	
	$order2 = $ord->tkDonhang_Q();
	if($order2){
		while($result2 = $order2->fetch_array()){
			$data2[$result2['QUY']-1]['TT'] = $result2['TONG_DOANH_THU'] ;
		}
	}

	$order3 = $ord->tkDonhang_Y();
	if($order3){
		while($result3 = $order3->fetch_array()){
			$data3[] = array("Nam"=>$result3['NAM'],"TT"=>$result3['TONG_DOANH_THU']) ;
		}
	}
	$data4 = array(array("Ngay"=>'0000',"TT"=>0));

	if($_COOKIE['from']&&$_COOKIE['to']){
		$order4 = $ord->tkDonhang_O($_COOKIE['from'],$_COOKIE['to']);
	if($order4){
		while($result4 = $order4->fetch_array()){
			$data4[] = array("Ngay"=>$result4['NGAY_TAO_DON'],"TT"=>$result4['TONG_TIEN']) ;
		}
	}
	}

 $d  = array($data, $data2, $data3, $data4 );

//    echo json_encode($data);
//
//   
//    echo json_encode($data2);
 echo json_encode($d);
?>