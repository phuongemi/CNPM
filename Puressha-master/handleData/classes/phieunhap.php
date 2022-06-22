<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
	class phieunhap
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		//Thêm phiếu nhập
		public function themPhieuNhap($data){
			$MPN = mysqli_real_escape_string($this->db->link, $data['MPN']);
			$MXCC = mysqli_real_escape_string($this->db->link, $data['MXCC']);
			$NGAY_NHAP_HANG = mysqli_real_escape_string($this->db->link, $data['NGAY_NHAP_HANG']);
			$TONG_TIEN = mysqli_real_escape_string($this->db->link, $data['TONG_TIEN']);
			$TONG_SO_LUONG = mysqli_real_escape_string($this->db->link, $data['TONG_SO_LUONG']);

			if($MPN=="" || $MXCC=="" || $NGAY_NHAP_HANG=="" ){
				$alert = "Các trường không được để trống";
				return $alert;
			}					
				else{
					$query = "INSERT INTO phieu_nhap(MPN,MXCC,NGAY_NHAP_HANG,TONG_TIEN,TONG_SO_LUONG) 
							  VALUES('$MPN','$MXCC','$NGAY_NHAP_HANG', '$TONG_TIEN', '$TONG_SO_LUONG')";
					
				}
				$result = $this->db->insert($query);
					if($result){
						$alert = "Thêm phiếu nhập thành công ";
						return $alert;
					}else{
						$alert = "Thêm phiếu nhập không thành công ";
						return $alert;
					}				
			}
		
        //Cập nhật phiếu nhập
		public function suaPhieuNhap($data){
			$MPN = mysqli_real_escape_string($this->db->link, $data['MPN']);
			$MXCC = mysqli_real_escape_string($this->db->link, $data['MXCC']);
			$NGAY_NHAP_HANG = mysqli_real_escape_string($this->db->link, $data['NGAY_NHAP_HANG']);
			$TONG_TIEN = mysqli_real_escape_string($this->db->link, $data['TONG_TIEN']);
			$TONG_SO_LUONG = mysqli_real_escape_string($this->db->link, $data['TONG_SO_LUONG']);

			if($MXCC=="" || $NGAY_NHAP_HANG==""){
				$alert = "Các trường không được để trống";
				return $alert;
			}					
				else{
					$query = "UPDATE phieu_nhap SET
                   
					MXCC = '$MXCC',
					NGAY_NHAP_HANG = '$NGAY_NHAP_HANG', 
					TONG_TIEN = '$TONG_TIEN', 
					TONG_SO_LUONG = '$TONG_SO_LUONG' 
			
					WHERE MPN = '$MPN'";
					
				}
				$result = $this->db->update($query);
					if($result){
						$alert = "Cập nhật phiếu nhập thành công ";
						return $alert;
					}else{
						$alert = "Cập nhật phiếu nhập không thành công ";
						return $alert;
					}				
			}
		
        //Xóa phiếu nhập
		public function xoaPhieuNhap($MPN){
			$query = "DELETE FROM phieu_nhap where MPN = '$MPN'";
			$result = $this->db->delete($query);
			// if($result){
			// 	$alert = "Xóa phiếu nhập thành công ";
			// 	return $alert;
			// }else{
			// 	$alert = "Xóa phiếu nhập không thành công ";
			// 	return $alert;
			// }
			
		}
		
		//Tổng số lượng và tổng tiền
        public function setTongSL(){
            $getCTSP="SELECT MPN, SUM(SO_LUONG) AS SL, SUM(THANH_TIEN) AS TT FROM chi_tiet_phieu_nhap GROUP BY MPN";
            $result_getCTSP=$this->db->select($getCTSP);
			
			while($r=$result_getCTSP->fetch_assoc()){
				$query="UPDATE phieu_nhap SET
					TONG_SO_LUONG = ".$r["SL"].",
					TONG_TIEN = ".$r["TT"]."
					WHERE MPN = '".$r["MPN"]."'";
			$result = $this->db->update($query);
			}
			
			return $result;
        }

        //Lấy sản phẩm theo mã phiếu nhập
		public function getByMPN($MPN){
			$query = "SELECT * FROM phieu_nhap where MPN = '$MPN'";
			$result = $this->db->select($query);
			return $result;
		}
		
        //Lấy tất cả phiếu nhập
		public function getAll(){
			$query = "SELECT * FROM phieu_nhap";
			$result = $this->db->select($query);
			return $result;
		} 
	}
?>