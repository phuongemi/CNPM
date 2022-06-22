<?php
    header('Content-Type: application/json');
    include_once("../../handleData/classes/donhang.php");
	
	$ord = new donhang();


	$data2 = array();
	
	$order2 = $ord->getAllByMKH("KH3");
	if($order2){
		while($result2 = $order2->fetch_array()){
			$data2[] = $result2 ;
		}
	}

   
    //echo json_encode($data);

   
    echo json_encode($data2);
?>