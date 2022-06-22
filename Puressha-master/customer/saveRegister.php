<?php
include_once("../handleData/classes/khachhang.php");
$cus = new khachhang();
switch($_POST['button'])
    {
        case 'register':
            {
                $name = $_REQUEST['name'];
                $pass = $_REQUEST['pass'];
                $phone = $_REQUEST['phone'];
                $passc = $_REQUEST['passc'];
                if($name !='' && $pass!='' && $phone!='' && $passc!='')
					if($pass == $passc)
						{
							$customer = array('MKH'=>null,'MAT_KHAU'=>$pass,'TEN'=>$name,'SDT'=>$phone,'NGAY_SINH'=>null,
											  'GIOI_TINH'=>null,'DIA_CHI'=>null,'TRANG_THAI'=>1);
							$lastid = $cus->themKhachHang($customer);
							
							if($lastid){
								session_start();
									$_SESSION['myid'] = $lastid;
									$_SESSION['mypass'] = $pass;
									$_SESSION['myname'] = $name;
								header('location:../puressha');
								echo $_SESSION['myid'];
							}
							else{
								echo 'Thêm tài khoản không thành công';
							}
						}
					else {
						echo 'Confirm pass không giống Pass';
					}
                else{
                    echo 'Chưa điền đủ thông tin';
                }
                break;
            }
    }
    
?>