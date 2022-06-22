<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
	class sanpham
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		//Thêm sản phẩm
		public function themSanPham($data){
			$MSP = mysqli_real_escape_string($this->db->link, $data['MSP']);
			$MDM = mysqli_real_escape_string($this->db->link, $data['MDM']);
			$TEN = mysqli_real_escape_string($this->db->link, $data['TEN']);
			$MO_TA = mysqli_real_escape_string($this->db->link, $data['MO_TA']);
			$TONG_SO_LUONG = mysqli_real_escape_string($this->db->link, $data['TONG_SO_LUONG']);

			if($MSP=="" || $MDM=="" || $TEN=="" || $MO_TA=="" ){
				$alert = "Các trường không được để trống";
				return $alert;
			}					
				else{
					$query = "INSERT INTO san_pham(MSP,MDM,TEN,MO_TA,TONG_SO_LUONG) 
							  VALUES('$MSP','$MDM','$TEN','$MO_TA','$TONG_SO_LUONG')";
					
				}
				$result = $this->db->insert($query);
					if($result){
						$alert = "Thêm sản phẩm thành công ";
						return $alert;
					}else{
						$alert = "Thêm sản phẩm không thành công ";
						return $alert;
					}				
			}
		
        //Cập nhật sản phẩm
		public function suaSanPham($data){
			
			$MSP = mysqli_real_escape_string($this->db->link, $data['MSP']);
			$MDM = mysqli_real_escape_string($this->db->link, $data['MDM']);
			$TEN = mysqli_real_escape_string($this->db->link, $data['TEN']);
			$MO_TA = mysqli_real_escape_string($this->db->link, $data['MO_TA']);
			$TONG_SO_LUONG = mysqli_real_escape_string($this->db->link, $data['TONG_SO_LUONG']);

			if($MDM=="" || $TEN=="" || $MO_TA==""){
				$alert = "Các trường không được để trống";
				return $alert;
			}					
				else{					
					$query = "UPDATE san_pham SET					
					MDM = '$MDM',
					TEN = '$TEN', 
					MO_TA = '$MO_TA', 
					TONG_SO_LUONG = '$TONG_SO_LUONG'
			
					WHERE MSP = '$MSP'";
					
				}
				
				$result = $this->db->update($query);
					if($result){
						$alert = "Cập nhật sản phẩm thành công ";
						return $alert;
					}else{
						$alert = "Cập nhật sản phẩm không thành công ";
						return $alert;
					}				
			}
		
        //Xóa sản phẩm
		public function xoaSanPham($MSP){
			$query = "DELETE FROM san_pham where MSP = '$MSP'";
			$result = $this->db->delete($query);
			
			// if($result){
			// 	$alert = "Xóa sản phẩm thành công";
			// 	return $alert;
			// }else{
			// 	$alert = "Xóa sản phẩm không thành công";
			// 	return $alert;
			// }
			
		}

        //Lấy sản phẩm theo mã sản phẩm
		public function getByMSP($MSP){
			$query = "SELECT * FROM san_pham where MSP = '$MSP'";
			$result = $this->db->select($query);
			return $result;
		}
		
        //Lấy tất cả sản phẩm
		public function getAll(){
			$query = "SELECT * FROM san_pham";
			$result = $this->db->select($query);
			return $result;
		} 

        //Tổng số lượng
        public function setTongSL(){
            $getCTSP="SELECT MSP, SUM(SO_LUONG) AS SL FROM chi_tiet_san_pham GROUP BY MSP";
            $result_getCTSP=$this->db->select($getCTSP);
			
			while($sl=$result_getCTSP->fetch_assoc()){
				$query="UPDATE san_pham SET
					TONG_SO_LUONG = ".$sl["SL"]."
					WHERE MSP = '".$sl["MSP"]."'";
			$result = $this->db->update($query);
			}
			
			return $result;
        }
		
		public function search_product($tukhoa){
			$tukhoa = $this->fm->validation($tukhoa);
			$query = "SELECT * FROM san_pham WHERE TEN LIKE '%$tukhoa%'";
			$result = $this->db->select($query);
			return $result;

		}
		
		// Lấy sản phẩm theo danh mục
		public function getSPByMDM($ListMDM){
			$i = 0 ; 
			$list = '(';
			foreach($ListMDM as $m){
				$list.= "'$m'";
				$i++ ;
				if($i < count($ListMDM)) $list.=',';
			}
			$list.=')';			
			$query = "SELECT * FROM san_pham where MDM in $list";
			$result = $this->db->select($query);
			return $result; 
		}
	}
?>