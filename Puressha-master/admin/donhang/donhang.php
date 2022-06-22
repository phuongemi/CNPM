<?php include("../../handleData/classes/donhang.php");
	$order = new donhang();
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Puressha - DH</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">

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
			<li class="active"><a href="../donhang/donhang.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>Đơn hàng</a></li>
			<li><a href="../phieunhap/phieunhap.php"><svg class="glyph stroked calendar blank">
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
				<h1 class="page-header">Đơn hàng</h1>
			</div>
		</div><!--/.row-->
		<div class="row">

			<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Tất cả</a></li>
							<li><a href="#tab2" data-toggle="tab">Chưa xử lý</a></li>
							<li><a href="#tab3" data-toggle="tab">Đã xử lý</a></li>
                            <li><a href="#tab4" data-toggle="tab">Đang giao</a></li>
                            <li><a href="#tab5" data-toggle="tab">Đã giao</a></li>
                            <li><a href="#tab6" data-toggle="tab">Đã hủy</a></li>
                            <li><a href="#tab7" data-toggle="tab">Giao thất bại</a></li>
                            <li><a href="#tab8" data-toggle="tab">Thu hồi</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
                            <h4>Tất cả đơn hàng</h4>
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">Đơn hàng</div>
											<div class="panel-body">
												<table class="table table-hover table-active" >
													<thead>
													<tr>
														<th >Mã đơn hàng</th>
														<th >Mã khách hàng</th>
														<th >Ngày tạo đơn</th>
                                                        <th >Trạng thái</th>
                                                        <th >Tổng tiền</th>
                                                        <th> Chi tiết</th>
													</tr>
													</thead>
                                                    <tbody>
                                                    <?php
														$orderList = $order->getAll();
														if($orderList){
															while($result = $orderList->fetch_assoc()){
															
														?>
                                                    <tr>
                                                    	<td> <?php echo $result['MDH']; ?></td>
                                                        <td> <?php echo $result['MKH']; ?></td>
                                                        <td> <?php echo $result['NGAY_TAO_DON']; ?></td>
                                                        <td> <?php echo $result['TRANG_THAI']; ?></td>
                                                        <td> <?php echo $result['TONG_TIEN']; ?></td>
                                                        <td>
                                                        <a href="chitietdonhang.php?MDH=<?php echo $result['MDH'];?>"><input type="button" class="btn btn-secondary btn btn-warning" value="Xem">
                                                     </td>
                                                     </tr>
                                                     <?php 
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab2">
                            <h4>Đã xác nhận</h4>
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">Đơn hàng</div>
											<div class="panel-body">
												<table class="table table-hover table-active" >
													<thead>
													<tr>
														<th >Mã đơn hàng</th>
														<th >Mã khách hàng</th>
														<th >Ngày tạo đơn</th>
                                                        <th >Trạng thái</th>
                                                        <th >Tổng tiền</th>
                                                        <th> Chi tiết</th>
													</tr>
													</thead>
                                                    <tbody>
                                                    <?php
														$orderList = $order->getAll();
														if($orderList){
															while($result = $orderList->fetch_assoc()){
                                                                if($result['TRANG_THAI'] == "Chưa xử lý"){
														?>
                                                    <tr>
                                                    	<td> <?php echo $result['MDH']; ?></td>
                                                        <td> <?php echo $result['MKH']; ?></td>
                                                        <td> <?php echo $result['NGAY_TAO_DON']; ?></td>
                                                        <td> <?php echo $result['TRANG_THAI']; ?></td>
                                                        <td> <?php echo $result['TONG_TIEN']; ?></td>
                                                        <td>
														<a href="chitietdonhang.php?MDH=<?php echo $result['MDH'];?>"><input type="button" class="btn btn-secondary btn btn-warning" value="Xem">
                                                     </td>
                                                     </tr>
                                                     <?php 
                                                            }
                                                        }
                                                    }
                                                        ?>
                                                    </tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab3">
                            <h4>Đã xử lý</h4>
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">Đơn hàng</div>
											<div class="panel-body">
												<table class="table table-hover table-active" >
													<thead>
													<tr>
														<th >Mã đơn hàng</th>
														<th >Mã khách hàng</th>
														<th >Ngày tạo đơn</th>
                                                        <th >Trạng thái</th>
                                                        <th >Tổng tiền</th>
                                                        <th> Chi tiết</th>
													</tr>
													</thead>
                                                    <tbody>
                                                    <?php
														$orderList = $order->getAll();
														if($orderList){
															while($result = $orderList->fetch_assoc()){
                                                                if($result['TRANG_THAI'] == "Đã xử lý"){
														?>
                                                    <tr>
                                                    	<td> <?php echo $result['MDH']; ?></td>
                                                        <td> <?php echo $result['MKH']; ?></td>
                                                        <td> <?php echo $result['NGAY_TAO_DON']; ?></td>
                                                        <td> <?php echo $result['TRANG_THAI']; ?></td>
                                                        <td> <?php echo $result['TONG_TIEN']; ?></td>
                                                        <td>
                                                        <a href="chitietdonhang.php?MDH=<?php echo $result['MDH'];?>"><input type="button" class="btn btn-secondary btn btn-warning" value="Xem">
                                                     </td>
                                                     </tr>
                                                     <?php 
                                                            }
                                                        }
                                                    }
                                                        ?>
                                                    </tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="tab-pane fade" id="tab4">
                            <h4>Đang giao</h4>
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">Đơn hàng</div>
											<div class="panel-body">
												<table class="table table-hover table-active" >
													<thead>
													<tr>
														<th >Mã đơn hàng</th>
														<th >Mã khách hàng</th>
														<th >Ngày tạo đơn</th>
                                                        <th >Trạng thái</th>
                                                        <th >Tổng tiền</th>
                                                        <th> Chi tiết</th>
													</tr>
													</thead>
                                                    <tbody>
                                                    <?php
														$orderList = $order->getAll();
														if($orderList){
															while($result = $orderList->fetch_assoc()){
                                                                if($result['TRANG_THAI'] == "Đang giao"){
														?>
                                                    <tr>
                                                    	<td> <?php echo $result['MDH']; ?></td>
                                                        <td> <?php echo $result['MKH']; ?></td>
                                                        <td> <?php echo $result['NGAY_TAO_DON']; ?></td>
                                                        <td> <?php echo $result['TRANG_THAI']; ?></td>
                                                        <td> <?php echo $result['TONG_TIEN']; ?></td>
                                                        <td>
                                                        <a href="chitietdonhang.php?MDH=<?php echo $result['MDH'];?>"><input type="button" class="btn btn-secondary btn btn-warning" value="Xem">
                                                     </td>
                                                     </tr>
                                                     <?php 
                                                            }
                                                        }
                                                    }
                                                        ?>
                                                    </tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab5">
								<h4>Đã giao</h4>
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">Đơn hàng</div>
											<div class="panel-body">
												<table class="table table-hover table-active" >
													<thead>
													<tr>
														<th >Mã đơn hàng</th>
														<th >Mã khách hàng</th>
														<th >Ngày tạo đơn</th>
                                                        <th >Trạng thái</th>
                                                        <th >Tổng tiền</th>
                                                        <th> Chi tiết</th>
													</tr>
													</thead>
                                                    <tbody>
                                                    <?php
														$orderList = $order->getAll();
														if($orderList){
															while($result = $orderList->fetch_assoc()){
                                                                if($result['TRANG_THAI'] == "Đã giao"){
														?>
                                                    <tr>
                                                    	<td> <?php echo $result['MDH']; ?></td>
                                                        <td> <?php echo $result['MKH']; ?></td>
                                                        <td> <?php echo $result['NGAY_TAO_DON']; ?></td>
                                                        <td> <?php echo $result['TRANG_THAI']; ?></td>
                                                        <td> <?php echo $result['TONG_TIEN']; ?></td>
                                                        <td>
														<a href="chitietdonhang.php?MDH=<?php echo $result['MDH'];?>"><input type="button" class="btn btn-secondary btn btn-warning" value="Xem">
                                                     </td>
                                                     </tr>
                                                     <?php 
                                                            }
                                                        }
                                                    }
                                                        ?>
                                                    </tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="tab-pane fade" id="tab6">
								<h4>Đã hủy</h4>
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">Đơn hàng</div>
											<div class="panel-body">
												<table class="table table-hover table-active" >
													<thead>
													<tr>
														<th >Mã đơn hàng</th>
														<th >Mã khách hàng</th>
														<th >Ngày tạo đơn</th>
                                                        <th >Trạng thái</th>
                                                        <th >Tổng tiền</th>
                                                        <th> Chi tiết</th>
													</tr>
													</thead>
                                                    <tbody>
                                                    <?php
														$orderList = $order->getAll();
														if($orderList){
															while($result = $orderList->fetch_assoc()){
                                                                if($result['TRANG_THAI'] == "Đã hủy"){
														?>
                                                    <tr>
                                                    	<td> <?php echo $result['MDH']; ?></td>
                                                        <td> <?php echo $result['MKH']; ?></td>
                                                        <td> <?php echo $result['NGAY_TAO_DON']; ?></td>
                                                        <td> <?php echo $result['TRANG_THAI']; ?></td>
                                                        <td> <?php echo $result['TONG_TIEN']; ?></td>
                                                        <td>
														<a href="chitietdonhang.php?MDH=<?php echo $result['MDH'];?>"><input type="button" class="btn btn-secondary btn btn-warning" value="Xem">
                                                     </td>
                                                     </tr>
                                                     <?php 
                                                            }
                                                        }
                                                    }
                                                        ?>
                                                    </tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="tab-pane fade" id="tab7">
								<h4>Giao thất bại</h4>
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">Đơn hàng</div>
											<div class="panel-body">
												<table class="table table-hover table-active" >
													<thead>
													<tr>
														<th >Mã đơn hàng</th>
														<th >Mã khách hàng</th>
														<th >Ngày tạo đơn</th>
                                                        <th >Trạng thái</th>
                                                        <th >Tổng tiền</th>
                                                        <th> Chi tiết</th>
													</tr>
													</thead>
                                                    <tbody>
                                                    <?php
														$orderList = $order->getAll();
														if($orderList){
															while($result = $orderList->fetch_assoc()){
                                                                if($result['TRANG_THAI'] == "Giao thất bại"){
														?>
                                                    <tr>
                                                    	<td> <?php echo $result['MDH']; ?></td>
                                                        <td> <?php echo $result['MKH']; ?></td>
                                                        <td> <?php echo $result['NGAY_TAO_DON']; ?></td>
                                                        <td> <?php echo $result['TRANG_THAI']; ?></td>
                                                        <td> <?php echo $result['TONG_TIEN']; ?></td>
                                                        <td>
                                                        <a href="chitietdonhang.php?MDH=<?php echo $result['MDH'];?>"><input type="button" class="btn btn-secondary btn btn-warning" value="Xem">
                                                     </td>
                                                     </tr>
                                                     <?php 
                                                            }
                                                        }
                                                    }
                                                        ?>
                                                    </tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab8">
								<h4>Đã thu hồi</h4>
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">Đơn hàng</div>
											<div class="panel-body">
												<table class="table table-hover table-active" >
													<thead>
													<tr>
														<th >Mã đơn hàng</th>
														<th >Mã khách hàng</th>
														<th >Ngày tạo đơn</th>
                                                        <th >Trạng thái</th>
                                                        <th >Tổng tiền</th>
                                                        <th> Chi tiết</th>
													</tr>
													</thead>
                                                    <tbody>
                                                    <?php
														$orderList = $order->getAll();
														if($orderList){
															while($result = $orderList->fetch_assoc()){
                                                                if($result['TRANG_THAI'] == "Thu hồi"){
														?>
                                                    <tr>
                                                    	<td> <?php echo $result['MDH']; ?></td>
                                                        <td> <?php echo $result['MKH']; ?></td>
                                                        <td> <?php echo $result['NGAY_TAO_DON']; ?></td>
                                                        <td> <?php echo $result['TRANG_THAI']; ?></td>
                                                        <td> <?php echo $result['TONG_TIEN']; ?></td>
                                                        <td>
                                                        <a href="chitietdonhang.php?MDH=<?php echo $result['MDH'];?>"><input type="button" class="btn btn-secondary btn btn-warning" value="Xem">
                                                     </td>
                                                     </tr>
                                                     <?php 
                                                            }
                                                        }
                                                    }
                                                        ?>
                                                    </tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
                            
						</div>
					</div>
                    
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