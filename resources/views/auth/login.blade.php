
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rekam Medis- Login</title>
	<link href="{{('/asset/backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{('/asset/backend/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{('/asset/backend/css/styles.css')}}" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{('backend/asset/js/html5shiv.js')}}"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <center>
        <br>
	<div class="col-lg-4 col-md-6">
            <div class="login_box p-3">
                <div class="row m-t-20">
                    <div class="col-lg-12 text-center">
                        <h3 class="text-white m-t-20">Sistem Informasi Rekamedis</h3>
                        <h5 class="text-white m-t-20">Login</h5></div>
                </div>

                <div class="m-t-15">
                    <form id="tryitForm" method="POST" autocomplete="off" action="{{ route('login') }}" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        @csrf
                        <div class="form-group ">
                            <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="ti-user"></i>
                            </span>
                                <input type="email" name="email" class="form-control" placeholder="Email" required="" data-bv-field="Email">
                            </div>
                        <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>

                        <div class="form-group ">
                            <div class="input-group m-t-15">
                            <span class="input-group-addon">
                                <i class="ti-lock"></i>
                            </span>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="" data-bv-field="password">
                            </div>
                        <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="password" data-bv-result="NOT_VALIDATED">Enter the password</small></div>

                        <div class="col-12 text-center">
                            <button
                              type="submit"
                              class="btn btn-info btn-block btn-flat margin-top-10">
                             Log in
                            </button>
                          </div>


                        </div>

                </div>

				</div>
			</div>
		</div><!-- /.col-->
    </div><!-- /.row -->
    </center>


<script src="{{('/asset/backend/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{('/asset/backend/js/bootstrap.min.js')}}"></script>
</body>
</html>


