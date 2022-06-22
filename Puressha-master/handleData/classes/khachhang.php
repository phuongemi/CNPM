<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
	class khachhang
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		//Thêm khách hàng
		public function themKhachHang($data){
			$MKH = mysqli_real_escape_string($this->db->link, $data['MKH']);
			$TEN = mysqli_real_escape_string($this->db->link, $data['TEN']);
            $SDT = mysqli_real_escape_string($this->db->link, $data['SDT']);
            $MAT_KHAU = mysqli_real_escape_string($this->db->link, $data['MAT_KHAU']);
            $NGAY_SINH = mysqli_real_escape_string($this->db->link, $data['NGAY_SINH']);
            $GIOI_TINH = mysqli_real_escape_string($this->db->link, $data['GIOI_TINH']);
            $DIA_CHI = mysqli_real_escape_string($this->db->link, $data['DIA_CHI']);
            $TRANG_THAI = mysqli_real_escape_string($this->db->link, $data['TRANG_THAI']);
             
			$last_id = $this->db->select("SELECT max(MKH) FROM khach_hang");
			$last_id = $last_id->fetch_assoc();
			
			
			$MKH = $this->fm->handleMa($last_id['max(MKH)']);
			
			$query = "INSERT INTO khach_hang(MKH,TEN,SDT,MAT_KHAU,NGAY_SINH,GIOI_TINH,DIA_CHI,TRANG_THAI) 
					  VALUES('$MKH','$TEN','$SDT','$MAT_KHAU','$NGAY_SINH','$GIOI_TINH','$DIA_CHI',$TRANG_THAI)";
			
			$result = $this->db->insert($query);
				if($result){
					return $MKH;
				}else{
					return 0;
				}				
			}
		
        //Cập nhật khách hàng
		public function suaKhachHang($data,$MKH){
			$MKH = mysqli_real_escape_string($this->db->link, $data['MKH']);
			$TEN = mysqli_real_escape_string($this->db->link, $data['TEN']);
            $SDT = mysqli_real_escape_string($this->db->link, $data['SDT']);
            $MAT_KHAU = mysqli_real_escape_string($this->db->link, $data['MAT_KHAU']);
            $NGAY_SINH = mysqli_real_escape_string($this->db->link, $data['NGAY_SINH']);
            $GIOI_TINH = mysqli_real_escape_string($this->db->link, $data['GIOI_TINH']);
            $DIA_CHI = mysqli_real_escape_string($this->db->link, $data['DIA_CHI']);
            $TRANG_THAI = mysqli_real_escape_string($this->db->link, $data['TRANG_THAI']);
                        			
			
				$query = "UPDATE khach_hang SET

				MKH = '$MKH',
				TEN = '$TEN',
				SDT = '$SDT',
				MAT_KHAU = '$MAT_KHAU',
				NGAY_SINH = '$NGAY_SINH',
				GIOI_TINH = '$GIOI_TINH',
				DIA_CHI = '$DIA_CHI',
				TRANG_THAI = $TRANG_THAI

				WHERE MKH = '$MKH'";
				
			
				$result = $this->db->update($query);
					if($result){
						$alert = "Cập nhật khách hàng thành công ";
						return $alert;
					}else{
						$alert = "Cập nhật khách hàng không thành công ";
						return $alert;
					}				
			}
		
        //Xóa khách hàng
		public function xoaKhachHang($MKH){
			$query = "DELETE FROM khach_hang where MKH = '$MKH'";
			$result = $this->db->delete($query);
			if($result){
				$alert = "Xóa khách hàng thành công ";
				return $alert;
			}else{
				$alert = "Xóa khách hàng không thành công ";
				return $alert;
			}
			
		}

        //Lấy khách hàng theo mã khách hàng
		public function getByMKH($MKH){
			$query = "SELECT * FROM khach_hang where MKH = '$MKH'";
			$result = $this->db->select($query);
			return $result;
		}
		
		//Lấy khách hàng theo số điện thoại
		public function getBySDT($SDT){
			$query = "SELECT * FROM khach_hang where SDT = '$SDT'";
			$result = $this->db->select($query);
			return $result;
		}
		
        //Lấy tất cả khách hàng
		public function getAll(){
			$query = "SELECT * FROM khach_hang";
			$result = $this->db->select($query);
			return $result;
		} 

        //Thay đổi trạng thái
        public function thaydoiTrangThai($MKH, $TRANG_THAI){
			
			if($TRANG_THAI) $state = 0;
			else $state = 1;
			
            $query = "UPDATE khach_hang SET TRANG_THAI = $state WHERE MKH = '$MKH'";
				$result = $this->db->update($query);
					if($result){
						$alert = "Cập nhật khách hàng thành công ";
						return $alert;
					}else{
						$alert = "Cập nhật khách hàng không thành công ";
						return $alert;
					}	
        }
	}
?>