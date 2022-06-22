<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Puressha - qlNV</title>

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
			<li><a href="../donhang/donhang.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Đơn hàng</a></li>
			<li ><a href="../phieunhap/phieunhap.php"><svg class="glyph stroked calendar blank">
				<use xlink:href="#stroked-calendar-blank"/></svg>Phiếu nhập</a></li>
			<li><a href="../giaohang/giaohang.php"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"/></svg> Giao hàng</a></li>
			<li><a href="../danhmuc/danhmuc.php"><svg class="glyph stroked clipboard with paper">
				<use xlink:href="#stroked-clipboard-with-paper"/></svg> Danh mục</a></li>
			<li><a href="../khachhang/khachhang.php"><svg class="glyph stroked key "><use xlink:href="#stroked-key"/></svg> Khách hàng</a></li>
			<li><a href="../xuongcungcap/xuongcungcap.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Xưởng cung cấp</a></li>
			<li class="active"><a href="../nhanvien/nhanvien.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Nhân viên</a></li>
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
				<h1 class="page-header">QUẢN LÝ NHÂN VIÊN</h1>
			</div>
		</div><!--/.row-->
		<div class="row">

			<div class="panel panel-default">
					<div class="panel-heading">Thêm nhân viên</div>
                    <div class="panel-body">
                    <form method="post">
                    <div class="row" style="margin:10px">
                    	<div class="col-lg-3 " style="color:#0CF"><b>MÃ NHÂN VIÊN<b></div>
                        <div class="col-lg-9">
                        	<input type="Text" class="form-control" name="idD" placeholder="Mã nhân viên">
                        </div>
                    </div>
                    <div class="row" style="margin:10px; margin-bottom:20px;">
                    	<div class="col-lg-3 " style="color:#0CF"><b>TÊN NHÂN VIÊN<b></div>
                        <div class="col-lg-9">
							<input type="text" class="form-control" name="idD" placeholder="Tên nhân viên">
                    	 </div>
                   </div>
                    
                   <div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>NGÀY SINH<b></div>
                        <div class="col-lg-9">
                        	<input type="Text" class="form-control" name="idD" placeholder="Ngày sinh">
                        </div>
                    </div>
                   <div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>GIỚI TÍNH<b></div>
                        <div class="col-lg-9">
                        	<input class="form-check-input" type="radio" name="checkout" id="gt" value="nam">
                            <label for="gt">Nam</label>
                        	<input class="form-check-input" style="margin-left:20px;" type="radio" name="checkout" id="gt" value="nu">
                            <label for="gt">Nữ</label>
                        </div>
                    </div>	
					<div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>ĐỊA CHỈ<b></div>
                        <div class="col-lg-9">
                        	<input type="Text" class="form-control" name="idD" placeholder="Địa chỉ">
                        </div>
                    </div>
                    <div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>CCCD<b></div>
                        <div class="col-lg-9">
                        	<input type="Text" class="form-control" name="idD" placeholder="Số căn cước công dân">
                        </div>
                    </div>
                    <div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>EMAIL<b></div>
                        <div class="col-lg-9">
                        	<input type="text" class="form-control" name="idD" placeholder="Email">
                        </div>
                    </div>
                    <div class="row" style="margin:10px">
                    	<div class="col-lg-3" style="color:#0CF"><b>CHỨC VỤ<b></div>
                        <div class="col-lg-9">
                        	<input type="Text" class="form-control" name="idD" placeholder="Chức vụ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 " style="margin:5px; ">
                        	<a href="nhanvien.php"> <input type="button" class="btn btn-secondary btn btn-danger"  value="Cancel"/>
                        </div>
                        <div class="col-lg-5"></div>
                        <div class="col-lg-1" style="margin:7px">
                       		
                        </div>
                        <div class="col-lg-1" style="margin:8px">
                       		
                        </div>
                         <div class="col-lg-1" style="margin:9px">	
                         <input type="button" class="btn btn-secondary btn btn-success" value="Thêm nhân viên"/>
                        </div>
                  </form>
                    </div>
				</div>
		</div>
		
		<!--/.row-->	
		
	</div><!--/.main-->
    

	<script src="../phieunhap/js/jquery-1.11.1.min.js"></script>
	<script src="../phieunhap/js/bootstrap.min.js"></script>
	<script src="../phieunhap/js/chart.min.js"></script>
	<script src="../phieunhap/js/chart-data.js"></script>
	<script src="../phieunhap/js/easypiechart.js"></script>
	<script src="../phieunhap/js/easypiechart-data.js"></script>
	<script src="../phieunhap/js/bootstrap-datepicker.js"></script>
	<script src="../phieunhap/js/bootstrap-table.js"></script>
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
