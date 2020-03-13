<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REKAM - MEDIS</title>
	<link href="{{('/asset/backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{('/asset/backend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{('/asset/backend/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{('/asset/backend/css/styles.css')}}" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Rekam</span>Medis</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{ Auth::user()->name}}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>

        <ul class="nav menu">

                <li class=""><a href="{{('admin')}}"><em class="fa fa-dashboard">&nbsp;</em>Halaman Admin</a></li>
                <li class=""><a href="{{('/admin/pasien')}}"><em class="fa fa-">&nbsp;</em> Data Pasien</a></li>
                <li class=""><a href="{{('/admin/rm')}}"><em class="fa fa-">&nbsp;</em> Data Rekam Medis</a></li>
                <li class=""><a href="{{('/admin/obat')}}"><em class="fa fa-">&nbsp;</em>Data Obat</a></li>
                <li class=""><a href="{{('/admin/perawatan')}}"><em class="fa fa-">&nbsp;</em>Data Perawatan</a></li>
                <li class=""><a href="{{('rm')}}"><em class="fa fa-">&nbsp;</em>Kasir</a></li>
                            <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
                               <em class="fa fa-navicon">&nbsp;</em> POLI IBU<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
                                   </a>
                               <ul class="children collapse" id="sub-item-3">

                               <li><a class="" href="{{('/admin/persalinan')}}">
                                   <span class="fa fa-arrow-right">&nbsp;</span> IBU - Persalinan
                                       </a></li>

                               <li><a class="" href="{{('/admin/hamil')}}">
                                   <span class="fa fa-arrow-right">&nbsp;</span> IBU - Hamil
                               </a></li>

                               <li><a class="" href="{{('poli')}}">
                                   <span class="fa fa-arrow-right">&nbsp;</span> IBU - KB
                                       </a></li>
                                   </ul>
                            </li>
                                   <ul class="nav menu">
                                        <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                                           <em class="fa fa-navicon">&nbsp;</em> POLI ANAK<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
                                               </a>
                                           <ul class="children collapse" id="sub-item-2">

                                           <li><a class="" href="{{('kun')}}">
                                               <span class="fa fa-arrow-right">&nbsp;</span> Balita Sehat - Imunisasi
                                                   </a></li>

                                           <li><a class="" href="{{('poli')}}">
                                               <span class="fa fa-arrow-right">&nbsp;</span> Balita - Pengobatan
                                           </a></li>
                                           </ul>
                        <li><a href="{{('login')}}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{('admin')}}">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"></li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        TAMBAH DATA IBU HAMIL
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
                                <div class="col-md-12">
                                        <table id="tab" class="table table-striped table-bordered" style="width:100%">
                                        <!-- <table class="table table-default"> -->
                                                <div class="m-t-20">
                                                        <form method="POST" action="{{route('pasien.store')}}">
                                                            @csrf
                                                            <div class="control-group input-group" style="margin-top:10px">
                                                                <div class="col-md-10">
                                                                  <label for="first_name1" class="col-form-label">Kode Pasien</label>
                                                                </div>
                                                                <div class="col-lg-10">
                                                                    <div class="input-group">
                                                                    <input type="text" name="id_pasien" class="form-control" value="P0-<?php echo rand()?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <br>

                                                            <div class="control-group input-group" style="margin-top:10px">
                                                                <div class="col-md-10">
                                                                  <label for="first_name1" class="col-form-label">Nama Pasien</label>
                                                                </div>
                                                                <div class="col-lg-10">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="first_name1" name="nm_pasien" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="control-group input-group" style="margin-top:10px">
                                                                <div class="col-md-10">
                                                                  <label for="first_name1" class="col-form-label">Usia (*tahun)</label>
                                                                </div>
                                                                <div class="col-lg-10">
                                                                    <div class="input-group">
                                                                        <input type="number" class="form-control" id="first_name1" name="usia" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="control-group input-group" style="margin-top:10px">
                                                                <div class="col-md-10">
                                                                  <label for="first_name1" class="col-form-label">Alamat</label>
                                                                </div>
                                                                <div class="col-lg-10">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="first_name1" name="alamat" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="control-group input-group" style="margin-top:10px">
                                                                <div class="col-md-10">
                                                                  <label for="first_name1" class="col-form-label">Jenis Kelamin</label>
                                                                </div>
                                                                <div class="col-lg-10">
                                                                    <div class="input-group">
                                                                        <select class="form-control" name="jk">
                                                                            <option value="">--pilih--</option>
                                                                            <option value="L">Laki-laki</option>
                                                                            <option value="P">Perempuan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="control-group input-group" style="margin-top:10px">
                                                                    <div class="col-md-10">
                                                                      <label for="first_name1" class="col-form-label">No. Telphone</label>
                                                                    </div>
                                                                    <div class="col-lg-10">
                                                                        <div class="input-group">
                                                                            <input type="" class="form-control" id="first_name1" name="no_tlpn" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>

                                                            <div class="control-group input-group" style="margin-top:10px">
                                                                <div class="col-md-10">
                                                                  <label for="first_name1" class="col-form-label">Keterangan</label>
                                                                </div>
                                                                <div class="col-lg-10">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" name="ket">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="control-group input-group" style="margin-top:10px">
                                                                <div class="col-lg-10">
                                                                    <div class="input-group">
                                                                        <button type="submit" name="submit" class="btn btn-primary layout_btn_prevent">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
    </div>	<!--/.main-->


	<script src="{{('/asset/backend/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{('/asset/backend/js/bootstrap.min.js')}}"></script>
	<script src="{{('/asset/backend/js/chart.min.js')}}"></script>
	<script src="{{('/asset/backend/js/chart-data.js')}}"></script>
	<script src="{{('/asset/backend/js/easypiechart.js')}}"></script>
	<script src="{{('/asset/backend/js/easypiechart-data.js')}}"></script>
	<script src="{{('/asset/backend/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{('/asset/backend/js/custom.js')}}"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

</body>
</html>
