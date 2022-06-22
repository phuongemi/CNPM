<?php include("../../handleData/classes/phieunhap.php");
	include("../../handleData/classes/chitietphieunhap.php");
	$inBillDetail = new chitietphieunhap();
	$inBill = new phieunhap();
	$mpn = $_GET['MPN'];
?> 
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Puressha - qlCTPN</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">

<!-- Favicon  -->
<link rel="icon" href="../../puressha/img/core-img/letter-p2.png">

<!-- Favicon  -->
<link rel="icon" href="../../puressha/img/core-img/letter-p2.png">

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Puressha</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="../index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="../thongke/thongke.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Thống kê</a></li>
			<li><a href="../sanpham/sanpham.php"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg> Sản phẩm</a></li>
			<li><a href="../donhang/donhang.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Đơn hàng</a></li>
			<li class="active"><a href="../phieunhap/phieunhap.php"><svg class="glyph stroked calendar blank">
				<use xlink:href="#stroked-calendar-blank"/></svg>Phiếu nhập</a></li>
			<li><a href="../giaohang/giaohang.php"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"/></svg> Giao hàng</a></li>
			<li><a href="../danhmuc/danhmuc.php"><svg class="glyph stroked clipboard with paper">
				<use xlink:href="#stroked-clipboard-with-paper"/></svg> Danh mục</a></li>
			<li><a href="../khachhang/khachhang.php"><svg class="glyph stroked key "><use xlink:href="#stroked-key"/></svg> Khách hàng</a></li>
			<li><a href="../xuongcungcap/xuongcungcap.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Xưởng cung cấp</a></li>
			<li><a href="../nhanvien/nhanvien.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Nhân viên</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
				</ul>
			</li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">CHI TIẾT PHIẾU NHẬP</h1>
			</div>
		</div><!--/.row-->
		<div class="row">

			<div class="panel panel-default">
				<div class="panel-heading">Thông tin chi tiết phiếu nhập</div>
                    <div class="panel-body">
                    <?php
						$getInBillByMPN = $inBill->getByMPN($mpn);
						if($getInBillByMPN){
							while($result_mpn = $getInBillByMPN->fetch_assoc()){
								
					?>
                    <div class="row" style="margin:10px">
                    	<div class="col-lg-3 " style="color:#0CF"><b>MÃ PHIẾU NHẬP<b></div>
                        <div class="col-lg-9"><?php echo $result_mpn['MPN']; ?></div>
                    </div>
                    <div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>MÃ XƯỞNG CUNG CẤP<b></div>
                        <div class="col-lg-9"><?php echo $result_mpn['MXCC']; ?></div>
                    </div>
                    <div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>NGÀY NHẬP HÀNG<b></div>
                        <div class="col-lg-9"><?php echo $result_mpn['NGAY_NHAP_HANG']; ?></div>
                    </div>
                   <div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>TỔNG SỐ LƯỢNG<b></div>
                        <div class="col-lg-9"><?php echo $result_mpn['TONG_SO_LUONG']; ?></div>
                    </div>
                    <div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>TỔNG TIỀN<b></div>
                        <div class="col-lg-9"><?php echo $result_mpn['TONG_TIEN']; ?></div>
                    </div>
					
			</div>
            <div class="panel-body">
						<table class="table table-hover table-active" >
						    <thead>
						    <tr>
                           		<th >STT</th>
						        <th >Mã sản phẩm</th>
                                <th >Mã XCC</th>
                                <th >Tên sản phẩm</th>
                                <th> Hình ảnh </th>
                                <th >Size</th>
                                <th >Màu sắc</th>
                                <th >Giá nhập</th>
                                <th >Số lượng</th>
                                <th >Tổng tiền</th>
						    </tr>
						    </thead>
                            <tbody>
							<?php
								$inBillDetailList = $inBillDetail->getCTPNByMPN($mpn);
								if($inBillDetailList){
									$i = 0;
								while($result = $inBillDetailList->fetch_assoc()){
									$i++;		
								?>
                             <tr>
                                   <td><?php echo $i; ?></td>
                                   <td><?php echo $result['MSP']; ?></td>
                                   <td><?php echo $result['MXCC']; ?></td>
                                   <td><?php echo $result['TEN']; ?></td>
                                   <td><img src="../../puressha/img/product-img/<?php echo $result['ANH'];?>" style="width: 120px; height:150px;"></td>
                                   <td><?php echo $result['SIZE']; ?></td>
                                   <td><?php echo $result['MAU_SAC']; ?></td>
                                   <td><?php echo $result['GIA_NHAP']; ?></td>
                                   <td><?php echo $result['SO_LUONG']; ?></td>
                                   <td><?php $TOTAL = $result['GIA_NHAP'] * $result['SO_LUONG'];
								   			 echo $TOTAL;
										?></td>
                              </tr>
							  <?php 
								}
							}
							?>
                                                           
                           </tbody>
						</table>
			</div>
                    <div class="row">
                        <div class="col-lg-2 " style="margin:5px; ">
                        	<a href="phieunhap.php"> <input type="button" class="btn btn-secondary btn btn-danger"  style="margin-left:30px" value="Quay lại"/>
                        </div>
                        <div class="col-lg-5"></div>
                        <div class="col-lg-2" style="margin:7px">
                        	
                        </div>
                        <div class="col-lg-2" style="margin:7px">
                       		<a href="ql_chitietphieunhap.php?MPN=<?php echo $result_mpn['MPN']; ?>"> <input type="button" class="btn btn-secondary btn btn-success" style="margin-left:5px" value="Thêm chi tiết"/>
                        </div>
                         <div class="col-lg-1" style="margin:9px">
                        </div>
                    </div>
					<?php
						
					}
				}
					?>
				</div>

		</div>
		
		<!--/.row-->	
		
	</div><!--/.main-->

	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
