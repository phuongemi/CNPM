<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Puressha - TK</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">

<!-- Favicon  -->
<link rel="icon" href="../../puressha/img/core-img/letter-p2.png">

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
	
<script src="../js/jquery-1.11.1.min.js"></script>

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
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
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
			<li ><a href="../index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="active"><a href="../thongke/thongke.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Thống kê</a></li>
			<li><a href="../sanpham/sanpham.php"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg> Sản phẩm</a></li>
			<li><a href="../donhang/donhang.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>Đơn hàng</a></li>
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
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="../login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
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
				<h1 class="page-header">BÁO CÁO THỐNG KÊ</h1>
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                <ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Theo tháng</a></li>
							<li><a href="#tab2" data-toggle="tab" onClick="showGraph();">Theo quý</a></li>
                            <li><a href="#tab3" data-toggle="tab">Theo năm</a></li>
                            <li><a href="#tab4" data-toggle="tab"></a></li>
				</ul>
					<div class="panel-heading">THỐNG KÊ DOANH THU</div>
                    <div lass="panel-heading">
                    <form name="f1" action="#"   method="post">
 					 	<label for="from" style="margin:10px;">From:</label>
  						<input type="date" id="from" name="from">
                         <label for="to">To:</label>
                         <input type="date" id="to" name="to">
 						 <input type="button" onclick="show();" class="btn btn-secondary btn btn-info" value="Duyệt">
					</form>
                    </div>
					<div class="tab-content">
					<div id="tab1" class="panel-body container tab-pane active">
						<div class="canvas-wrapper">
							<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
						</div>
                        <div class="row">
                        	<div class="col-lg-2 " style="margin:5px; ">
                        	
                        	</div>
                        	<div class="col-lg-5"></div>
                        	<div class="col-lg-1" style="margin:7px">
                       		
                        	</div>
                        	<div class="col-lg-1" style="margin:8px">
                       		
                       	 	</div>
                         	<div class="col-lg-1" style="margin:9px">	
                         	<a href="#"><input type="button" class="btn btn-secondary btn btn-success" value="Xuất Excel"/></a>
                       	 	</div>
                    	</div>
					</div>
					<div id="tab2" class="panel-body container tab-pane fade">
						<div class="canvas-wrapper">
							<canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
						</div>
                        <div class="row">
                        	<div class="col-lg-2 " style="margin:5px; ">
                        	
                        	</div>
                        	<div class="col-lg-5"></div>
                        	<div class="col-lg-1" style="margin:7px">
                       		
                        	</div>
                        	<div class="col-lg-1" style="margin:8px">
                       		
                       	 	</div>
                         	<div class="col-lg-1" style="margin:9px">	
                         	<a href="#"><input type="button" class="btn btn-secondary btn btn-success" value="Xuất Excel"/></a>
                       	 	</div>
                    	</div>
					</div>
					<div id="tab3" class="panel-body container tab-pane fade">
						
						<div class="canvas-wrapper">
							<canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
						</div>
                        <div class="row">
                        	<div class="col-lg-2 " style="margin:5px; ">
                        	
                        	</div>
                        	<div class="col-lg-5"></div>
                        	<div class="col-lg-1" style="margin:7px">
                       		
                        	</div>
                        	<div class="col-lg-1" style="margin:8px">
                       		
                       	 	</div>
                         	<div class="col-lg-1" style="margin:9px">	
                         	<a href="#"><input type="button" class="btn btn-secondary btn btn-success" value="Xuất Excel"/></a>
                       	 	</div>
                    	</div>
					</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
<script>
//var yValues = [6000000,5500000,7500000,8000000,8900000,9300000,6700000,5100000,9200000,7300000,5500000,8800000,1000000];
//	
//var yV = [1000000,6000000,3000000,2500000,3000000];
//
//new Chart($("#myChart"), {
//  type: "line",
//  data: {
//    //labels: xValues,
//	labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
//    datasets: [{
//	
//      label: "",
//	  backgroundColor : "rgba(255, 99, 71, 0.2)",
//					borderColor : "rgba(255, 99, 71, 1)",
//					pointColor : "rgba(255, 99, 71, 1)",
//					pointStrokeColor : "#fff",
//					pointHighlightFill : "#fff",
//					pointHighlightStroke : "rgba(255, 99, 71,1)",
//					data: yValues
//    }]
//  },
//  options: {
//    legend: {display: false},
//    scales: {
//      yAxes: [{ticks: {min: 1000000, max:10000000}}],
//    }
//  }
//});

function show() {
	
	createCookie('from', document.getElementById("from").value, 1);
	createCookie('to', document.getElementById("to").value, 1);
			showGraph4();
}
</script>
<script>
	document.write(document.getElementById("from").value);
        $(document).ready(function () {
            showGraph();
            showGraph2();
			showGraph3();
        });


        function showGraph(){
                $.post("data.php",
                function (data){
                    var labels = [];
                    var result = [];
                    for (var i in data[0]) {
                        labels.push(data[0][i]["Thang"]);
                        result.push(data[0][i]["TT"]);
                    }
                    var myChart = new Chart($("#myChart"), {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    data: result,
                                    label: "",
									backgroundColor : "rgba(255, 99, 71, 0.2)",
									borderColor : "rgba(255, 99, 71, 1)",
									pointColor : "rgba(255, 99, 71, 1)",
									pointStrokeColor : "#fff",
									pointHighlightFill : "#fff",
									pointHighlightStroke : "rgba(255, 99, 71,1)"
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Đơn hàng"
                            }
                        }
                    });
					
                });
        }
	function showGraph2(){
                $.post("data.php",
                function (data){
                    var labels = [];
                    var result = [];
                    for (var i in data[1]) {
                        labels.push(data[1][i]["Quy"]);
                        result.push(data[1][i]["TT"]);
                    }
                    var myChart = new Chart($("#myChart2"), {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    data: result,
                                    label: "",
									backgroundColor : "rgba(255, 99, 71, 0.2)",
									borderColor : "rgba(255, 99, 71, 1)",
									pointColor : "rgba(255, 99, 71, 1)",
									pointStrokeColor : "#fff",
									pointHighlightFill : "#fff",
									pointHighlightStroke : "rgba(255, 99, 71,1)"
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Đơn hàng"
                            }
                        }
                    });
					
                });
        }
	function showGraph3(){
                $.post("data.php",
                function (data){
                    var labels = [];
                    var result = [];
                    for (var i in data[2]) {
                        labels.push(data[2][i]["Nam"]);
                        result.push(data[2][i]["TT"]);
                    }
                    var myChart = new Chart($("#myChart3"), {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    data: result,
                                    label: "",
									backgroundColor : "rgba(255, 99, 71, 0.2)",
									borderColor : "rgba(255, 99, 71, 1)",
									pointColor : "rgba(255, 99, 71, 1)",
									pointStrokeColor : "#fff",
									pointHighlightFill : "#fff",
									pointHighlightStroke : "rgba(255, 99, 71,1)"
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Đơn hàng"
                            }
                        }
                    });
					
                });
        }
	function showGraph4(){
                $.post("data.php",
                function (data){
                    var labels = [];
                    var result = [];
                    for (var i in data[3]) {
                        labels.push(data[3][i]["Ngay"]);
                        result.push(data[3][i]["TT"]);
                    }
                    var myChart = new Chart($("#myChart"), {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    data: result,
                                    label: "",
									backgroundColor : "rgba(255, 99, 71, 0.2)",
									borderColor : "rgba(255, 99, 71, 1)",
									pointColor : "rgba(255, 99, 71, 1)",
									pointStrokeColor : "#fff",
									pointHighlightFill : "#fff",
									pointHighlightStroke : "rgba(255, 99, 71,1)"
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Đơn hàng"
                            }
                        }
                    });
					
                });
        }
	
	function createCookie(name, value, days) {
	  var expires;
	  if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		expires = "; expires=" + date.toGMTString();
	  } else {
	   expires = "";
	  }
	  document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
	}
        </script>
	
		
		<!--div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Bar Chart</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="bar-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
		
		<!--div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Pie Chart</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pie-chart" ></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Doughnut Chart</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="doughnut-chart" ></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<!--div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Label:</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Label:</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Label:</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Label:</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
									
	</div>	<!--/.main-->
	  

	<script src="../js/bootstrap.min.js"></script>
	<!--script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script-->
	<script src="../js/bootstrap-datepicker.js"></script>
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
