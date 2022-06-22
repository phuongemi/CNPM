<?php
include_once("../handleData/classes/khachhang.php");
$cus = new khachhang();
switch($_POST['button'])
    {
        case 'login':
            {
                $phone = $_REQUEST['phone'];
                $pass = $_REQUEST['pass'];
                if($phone!='' && $pass!='')
                {
					$customer = $cus->getBySDT($phone);
					$customer = $customer->fetch_assoc();
                    if($customer){
						if($customer['MAT_KHAU'] == $pass){
							if($customer['TRANG_THAI'] == 1){
								session_start();
									$_SESSION['myid'] = $customer['MKH'];
									$_SESSION['mypass'] = $pass;
									$_SESSION['myname'] = $customer['TEN'];
								echo '<script>alert("Đăng nhập thành công");</script>';
								header('location:../puressha');
							}
							else "Tài khoản bị chặn";
						}
						else{
							echo 'Nhập sai password';
						}
					}
					else{
						echo 'Không tìm thấy tài khoản';
					}
                }
                else{
                    echo 'Chưa điền đủ phone, password';
                }
                break;
            }
    }
    
?>