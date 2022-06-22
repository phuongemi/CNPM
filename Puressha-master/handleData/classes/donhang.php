<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
	class donhang
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		//Thêm đơn hàng
		public function themDonHang($data){
			$MDH = mysqli_real_escape_string($this->db->link, $data['MDH']);
			$MKH = mysqli_real_escape_string($this->db->link, $data['MKH']);
			$NGAY_TAO_DON = mysqli_real_escape_string($this->db->link, $data['NGAY_TAO_DON']);
			$DIA_CHI_GIAO_HANG = mysqli_real_escape_string($this->db->link, $data['DIA_CHI_GIAO_HANG']);
			$HINH_THUC_THANH_TOAN = mysqli_real_escape_string($this->db->link, $data['HINH_THUC_THANH_TOAN']);
            $TRANG_THAI = mysqli_real_escape_string($this->db->link, $data['TRANG_THAI']);
            $TONG_SO_LUONG = mysqli_real_escape_string($this->db->link, $data['TONG_SO_LUONG']);
            $TONG_TIEN = mysqli_real_escape_string($this->db->link, $data['TONG_TIEN']);
			
			$last_id = $this->db->select("SELECT max(MDH) FROM don_hang");
			$last_id = $last_id->fetch_assoc();
			
			
			$MDH = $this->fm->handleMa($last_id['max(MDH)']);

			if($MKH=="" || $NGAY_TAO_DON=="" || $DIA_CHI_GIAO_HANG=="" || $HINH_THUC_THANH_TOAN=="" || $TRANG_THAI=="" || $TONG_SO_LUONG=="" || $TONG_TIEN==""){
				$alert = "Các trường không được để trống";
				return $alert;
			}					
				else{
					$query = "INSERT INTO don_hang(MDH,MKH,NGAY_TAO_DON,DIA_CHI_GIAO_HANG,HINH_THUC_THANH_TOAN,TRANG_THAI,TONG_SO_LUONG,TONG_TIEN) 
							  VALUES('$MDH','$MKH','$NGAY_TAO_DON','$DIA_CHI_GIAO_HANG','$HINH_THUC_THANH_TOAN','$TRANG_THAI','$TONG_SO_LUONG','$TONG_TIEN')";
					
				}
				$result = $this->db->insert($query);
					if($result){
						return $MDH;
					}else{
						return 0;
					}					
			}
		
        //Cập nhật đơn hàng
		public function capnhatDonHang($data,$MDH){
			$MDHN = mysqli_real_escape_string($this->db->link, $data['MDH']);
			$MKH = mysqli_real_escape_string($this->db->link, $data['MKH']);
			$NGAY_TAO_DON = mysqli_real_escape_string($this->db->link, $data['NGAY_TAO_DON']);
			$DIA_CHI_GIAO_HANG = mysqli_real_escape_string($this->db->link, $data['DIA_CHI_GIAO_HANG']);
			$HINH_THUC_THANH_TOAN = mysqli_real_escape_string($this->db->link, $data['HINH_THUC_THANH_TOAN']);
            $TRANG_THAI = mysqli_real_escape_string($this->db->link, $data['TRANG_THAI']);
            $TONG_SO_LUONG = mysqli_real_escape_string($this->db->link, $data['TONG_SO_LUONG']);
            $TONG_TIEN = mysqli_real_escape_string($this->db->link, $data['TONG_TIEN']);

			if($MDH=="" || $MKH=="" || $NGAY_TAO_DON=="" || $DIA_CHI_GIAO_HANG=="" || $HINH_THUC_THANH_TOAN=="" || $TRANG_THAI=="" || $TONG_SO_LUONG=="" || $TONG_TIEN==""){
				$alert = "Các trường không được để trống";
				return $alert;
			}					
				else{
					$query = "UPDATE don_hang SET

                    MDH = '$MDHN',
					MKH = '$MKH',
					NGAY_TAO_DON = '$NGAY_TAO_DON', 
					DIA_CHI_GIAO_HANG = '$DIA_CHI_GIAO_HANG', 
                    HINH_THUC_THANH_TOAN = '$HINH_THUC_THANH_TOAN',
                    TRANG_THAI = '$TRANG_THAI',
					TONG_SO_LUONG = '$TONG_SO_LUONG', 
                    TONG_TIEN = '$TONG_TIEN'
			
					WHERE MDH = '$MDH'";
					
				}
				$result = $this->db->update($query);
					if($result){
						$alert = "Cập nhật đơn hàng thành công";
						return $alert;
					}else{
						$alert = "Cập nhật đơn hàng không thành công";
						return $alert;
					}				
			}
		
        //Xóa đơn hàng
		public function xoaDonHang($MDH){
			$query = "DELETE FROM don_hang where MDH = '$MDH'";
			$result = $this->db->delete($query);
			if($result){
				$alert = "Xóa đơn hàng thành công";
				return $alert;
			}else{
				$alert = "Xóa đơn hàng không thành công";
				return $alert;
			}
			
		}

        //Lấy đơn hàng theo mã đơn hàng
		public function getByMDH($MDH){
			$query = "SELECT * FROM don_hang where MDH = '$MDH'";
			$result = $this->db->select($query);
			return $result;
		}
		
        //Lấy tất cả đơn hàng
		public function getAll(){
			$query = "SELECT * FROM don_hang";
			$result = $this->db->select($query);
			return $result;
		} 
		
		//Lấy tất cả đơn hàng theo MKH
		public function getAllByMKH($MKH){
			$query = "SELECT * FROM don_hang where MKH = '$MKH'";
			$result = $this->db->select($query);
			return $result;
		}

        //xử lý đơn hàng
        public function xulyDonHang($MDH){
            $query = "UPDATE don_hang SET
			TRANG_THAI = 'Đã xử lý'
			WHERE MDH = '$MDH'";	
			$result = $this->db->update($query);
        }

        //thu hồi đơn hàng
        public function thuhoiDonHang($MDH){
			$query = "UPDATE don_hang SET
			TRANG_THAI = 'Đã thu hồi'
			WHERE MDH = '$MDH'";	
			$result = $this->db->update($query);
        }

		//hủy đơn hàng
		public function huyDonHang($MDH){
			$query = "UPDATE don_hang SET
			TRANG_THAI = 'Đã hủy'
			WHERE MDH = '$MDH'";	
			$result = $this->db->update($query);
        }
		
		//nhận đơn hàng
		public function nhanDonHang($MDH){
			$query = "UPDATE don_hang SET
			TRANG_THAI = 'Đang giao'
			WHERE MDH = '$MDH'";	
			$result = $this->db->update($query);
        }
		
		//giao đơn hàng thất bại
		public function gtbDonHang($MDH){
			$query = "UPDATE don_hang SET
			TRANG_THAI = 'Giao thất bại'
			WHERE MDH = '$MDH'";	
			$result = $this->db->update($query);
        }
		
		//giao đơn hàng thành công
		public function gtcDonHang($MDH){
			$query = "UPDATE don_hang SET
			TRANG_THAI = 'Giao thành công'
			WHERE MDH = '$MDH'";	
			$result = $this->db->update($query);
        }
		
		//thống kê theo tháng
		public function tkDonhang_M(){
			$query = "SELECT MONTH(NGAY_TAO_DON) as THANG, SUM(TONG_TIEN) AS TONG_DOANH_THU
						FROM `don_hang` 
						WHERE YEAR(NGAY_TAO_DON) = YEAR(CURDATE())
						GROUP BY MONTH(NGAY_TAO_DON)";
			$result = $this->db->select($query);
			return $result;
        }
		
		//thống kê theo quý
		public function tkDonhang_Q(){
			$query = "SELECT QUARTER(NGAY_TAO_DON) as QUY, SUM(TONG_TIEN) AS TONG_DOANH_THU
						FROM `don_hang` 
						WHERE YEAR(NGAY_TAO_DON) = YEAR(CURDATE())
						GROUP BY QUARTER(NGAY_TAO_DON)";
			$result = $this->db->select($query);
			return $result;
        }
		
		//thống kê theo năm
		public function tkDonhang_Y(){
			$query = "SELECT YEAR(NGAY_TAO_DON) as NAM, SUM(TONG_TIEN) AS TONG_DOANH_THU
						FROM `don_hang` 
						GROUP BY YEAR(NGAY_TAO_DON)";
			$result = $this->db->select($query);
			return $result;
        }
		
		//thống kê theo tùy chọn
		public function tkDonhang_O($s,$e){
			$query = "SELECT NGAY_TAO_DON,TONG_TIEN
						FROM `don_hang` 
						WHERE NGAY_TAO_DON BETWEEN '$s' and '$e'";
			$result = $this->db->select($query);
			return $result;
        }
	}
?>