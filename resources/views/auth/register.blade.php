<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="register2-form-link">Đăng ký chuyên gia</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Đăng ký khách hàng</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register2-form" action="" method="post" role="form" style="display: block;">
									@csrf
                                    <div class="form-group">
										<input type="hidden" name="role_id" id="role_id" tabindex="1" class="form-control" placeholder="Chuyên gia" value="1">
									</div>
                                    <div class="form-group">
										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Tên" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mật khẩu">
									</div>
									<div class="form-group">
										<input type="password" name="password2" id="password2" tabindex="2" class="form-control" placeholder="Nhập lại mật khẩu">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit">Đăng ký1</button>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="" method="post" role="form" style="display: none;">
									@csrf
                                    <div class="form-group">
										<input type="hidden" name="role_id" id="role_id" tabindex="1" class="form-control" placeholder="Khách hàng" value="2">
									</div>
                                    <div class="form-group">
										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Tên" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mật khẩu">
									</div>
									<div class="form-group">
										<input type="password" name="password2" id="password2" tabindex="2" class="form-control" placeholder="Nhập lại mật khẩu">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit">Đăng ký2</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script>
        $(function() {
            $('#register2-form-link').click(function(e) {
                $("#register2-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#register2-form").fadeOut(100);
                $('#register2-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
		});
    </script>