<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
	class chitietdonhang
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		//Thêm chi tiết đơn hàng
		public function themChiTietDonHang($data){
			$MDH = mysqli_real_escape_string($this->db->link, $data['MDH']);
			$MCTSP = mysqli_real_escape_string($this->db->link, $data['MCTSP']);
			$GIA_BAN = mysqli_real_escape_string($this->db->link, $data['GIA_BAN']);
			$SO_LUONG = mysqli_real_escape_string($this->db->link, $data['SO_LUONG']);
			
			if($MDH=="" || $MCTSP==""){
				$alert = "Các trường không được để trống";
				return $alert;
			}					
				else{
					$TT=$GIA_BAN*$SO_LUONG;
					$query = "INSERT INTO chi_tiet_don_hang(MDH,MCTSP,GIA_BAN,SO_LUONG,THANH_TIEN) 
							  VALUES('$MDH','$MCTSP',$GIA_BAN,'$SO_LUONG','$TT')";
					
				}
				$result = $this->db->insert($query);
					if($result){
						$alert = "Thêm chi tiết đơn hàng thành công ";
						return $alert;
					}else{
						$alert = "Thêm chi tiết đơn hàng không thành công ";
						return $alert;
					}				
			}
		
        //Xóa chi tiết đơn hàng
		public function xoaChiTietDonHang($MDH,$MCTSP){
			$query = "DELETE FROM hoa_don where MHD = '$MHD' and MCTSP = '$MCTSP'";
			$result = $this->db->delete($query);
			if($result){
				$alert = "Xóa chi tiết đơn hàng thành công";
				return $alert;
			}else{
				$alert = "Xóa chi tiết đơn hàng không thành công";
				return $alert;
			}
			
		}
		
        //Lấy tất cả chi tiết đơn hàng
		public function getAll($MDH){
			$query = "SELECT * FROM chi_tiet_don_hang where MDH = '".$MDH."'";
			$result = $this->db->select($query);
			return $result;
		} 

		public function getCTSPByMDH($MDH){
			$query = "SELECT san_pham.MSP, chi_tiet_san_pham.ANH, san_pham.TEN, chi_tiet_san_pham.SIZE,
								chi_tiet_san_pham.MAU_SAC, chi_tiet_don_hang.GIA_BAN, chi_tiet_don_hang.SO_LUONG
						FROM san_pham, chi_tiet_san_pham, chi_tiet_don_hang
						WHERE chi_tiet_san_pham.MCTSP = chi_tiet_don_hang.MCTSP AND
								chi_tiet_don_hang.MDH = '$MDH' AND
								chi_tiet_san_pham.MSP = san_pham.MSP";
			$result = $this->db->select($query);
			return $result;
		}
	}
?>