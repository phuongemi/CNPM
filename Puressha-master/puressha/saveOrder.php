<?php
include_once("../handleData/classes/donhang.php");
include_once("../handleData/classes/chitietdonhang.php");
$ord = new donhang();
$ordD = new chitietdonhang();
if(isset($_POST['submit'])){
switch($_POST['submit'])
    {
        case 'Order':
       {
				$MKH = $_SESSION['myid'];
                $NGAY_TAO_DON = date("Y-m-d");
				$DIA_CHI_GIAO_HANG = $_REQUEST['address'];
                $HINH_THUC_THANH_TOAN = $_REQUEST['checkout'];
                $TONG_SO_LUONG = $amount;
                $TONG_TIEN = $total;
				
                if($MKH !='' && $NGAY_TAO_DON !='' && $DIA_CHI_GIAO_HANG !='' && $HINH_THUC_THANH_TOAN !='' 
				   && $TONG_SO_LUONG !='' && $TONG_TIEN !='')
				{
					$product = array('MDH'=>NULL,'MKH'=>$MKH,'NGAY_TAO_DON'=>$NGAY_TAO_DON,'DIA_CHI_GIAO_HANG'=>$DIA_CHI_GIAO_HANG,	
								     'HINH_THUC_THANH_TOAN'=>$HINH_THUC_THANH_TOAN,'TONG_SO_LUONG'=>$TONG_SO_LUONG,'TONG_TIEN'=>$TONG_TIEN,                                     'TRANG_THAI'=>'Chưa xử lý');
							
					$lastid = $ord->themDonHang($product);
						
					$MDH = $lastid;
					if($MDH !=''){
						foreach($cart as $c){

							$prodCD = $prodD->getByMCTSP($c[1]);
							$pD = $prodCD->fetch_assoc();	

							$productD = array('MDH'=>$lastid,'MCTSP'=>$pD['MCTSP'],'GIA_BAN'=>$pD['GIA_BAN'],'SO_LUONG'=>$c[2],	
								 'THANH_TIEN'=>null);
							$ordD->themChiTietDonHang($productD);
						}
						
						session_start();
						$_SESSION['cart']=null;
						echo '<script>alert("Thêm tài đơn hàng thành công");</script>';
						echo 'Thêm tài đơn hàng thành công';
					}
					else{
						echo 'Thêm tài đơn hàng không thành công';
					}
				}
				else{
					echo 'Chưa điền đủ thông tin';
				}

          break;
        }
    }
}
    
?>