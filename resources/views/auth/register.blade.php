{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> --}}
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@extends('layouts.index')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<div class="row">
						{{-- <div class="col-xs-6">
							<a href="#" class="active" id="register2-form-link">Đăng ký chuyên gia</a>
						</div>
						<div class="col-xs-6">
							<a href="#" id="register-form-link">Đăng ký khách hàng</a>
						</div> --}}
					</div>
					<hr>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							{{-- <form id="register2-form" action="" method="post" role="form" style="display: block;">
								@csrf
								<div class="form-group">
									<input type="hidden" name="role_id" id="role_id" tabindex="1" class="form-control"
										placeholder="Chuyên gia" value="1" disabled>
								</div>
								<div class="form-group">
									<input type="text" name="name" id="name" tabindex="1" class="form-control"
										placeholder="Tên" value="">
								</div>
								<div class="form-group">
									<input type="email" name="email" id="email" tabindex="1" class="form-control"
										placeholder="Email" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2"
										class="form-control" placeholder="Mật khẩu">
								</div>
								<div class="form-group">
									<input type="password" name="password2" id="password2" tabindex="2"
										class="form-control" placeholder="Nhập lại mật khẩu">
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
									<input type="hidden" name="role_id" id="role_id" tabindex="1" class="form-control"
										placeholder="Khách hàng" value="2" disabled>
								</div>
								<div class="form-group">
									<input type="text" name="name" id="name" tabindex="1" class="form-control"
										placeholder="Tên" value="">
								</div>
								<div class="form-group">
									<input type="email" name="email" id="email" tabindex="1" class="form-control"
										placeholder="Email" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2"
										class="form-control" placeholder="Mật khẩu">
								</div>
								<div class="form-group">
									<input type="password" name="password2" id="password2" tabindex="2"
										class="form-control" placeholder="Nhập lại mật khẩu">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<button type="submit">Đăng ký2</button>
										</div>
									</div>
								</div>
							</form> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


{{-- tailwind --}}


<section class="flex flex-col md:flex-row h-screen items-center">

	<div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
		<img src="https://source.unsplash.com/random" alt="" class="w-full h-full object-cover">
	</div>

	<div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

		<div class="w-full h-100">

			<h1 class="text-xl md:text-2xl font-bold leading-tight p-4 text-center">Sign up</h1>
			<!-- login by google and facebook -->
			<div class="p-2">
				<button type="button"
					class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 mb-3 border border-gray-300">
					<div class="flex items-center justify-center">
						<img src="https://img.icons8.com/color/28/000000/google-logo.png"/>
						<span class="ml-4">
							Log in
							with
							Google</span>
					</div>
				</button>
				<button type="button"
					class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
					<div class="flex items-center justify-center">
						<img src="https://img.icons8.com/color/28/000000/facebook-new.png"/>
						<span class="ml-4">
							Log in
							with
							Facebook</span>
					</div>
				</button>
				<hr class="mt-8 border-gray-300 w-full">
			</div>

			<div class="p-2 grid grid-cols-2 gap-4">
				<button type="button"
					class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
					<div class="flex items-center justify-center">
						<a href="#" class="active" id="register2-form-link">Đăng ký chuyên gia</a>
					</div>
				</button>
				<button type="button"
					class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
					<div class="flex items-center justify-center">
						<a href="#" id="register-form-link">Đăng ký khách hàng</a>
					</div>
				</button>
			</div>
			
			<!-- form -->
			<form id="register2-form" action="" method="post" role="form" style="display: block;">
				@csrf
				<div class="p-2">
					<input type="hidden" name="role_id" id="role_id" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Chuyên gia" value="1">
				</div>
				<div class="p-2">
					<input type="text" name="name" id="name" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Tên" value="" autofocus autocomplete>
				</div>
				<div class="p-2">
					<input type="email" name="email" id="email" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Email" value="" autofocus autocomplete>
				</div>
				<div class="p-2">
					<input type="password" name="password" id="password" tabindex="2"
					class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
					focus:bg-white focus:outline-none" placeholder="Mật khẩu">
				</div>
				<div class="p-2">
					<input type="password" name="password2" id="password2" tabindex="2"
					class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
					focus:bg-white focus:outline-none" placeholder="Nhập lại mật khẩu">
				</div>
				<div class="p-2 text-center">
					<button type="submit" class="w-48 bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
					px-2 py-3 mt-4">Đăng ký1</button>
				</div>
			</form>
			<form id="register-form" action="" method="post" role="form" style="display: none;">
				@csrf
				<div class="p-2">
					<input type="hidden" name="role_id" id="role_id" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Khách hàng" value="2">
				</div>
				<div class="p-2">
					<input type="text" name="name" id="name" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Tên" value="" autofocus autocomplete>
				</div>
				<div class="p-2">
					<input type="email" name="email" id="email" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Email" value="" autofocus autocomplete>
				</div>
				<div class="p-2">
					<input type="password" name="password" id="password" tabindex="2"
					class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
					focus:bg-white focus:outline-none" placeholder="Mật khẩu">
				</div>
				<div class="p-2">
					<input type="password" name="password2" id="password2" tabindex="2"
					class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
					focus:bg-white focus:outline-none" placeholder="Nhập lại mật khẩu">
				</div>
				<div class="p-2 text-center">
					<button type="submit" class="w-48 bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
					px-2 py-3 mt-4">Đăng ký2</button>
				</div>
			</form>
			<!-- new user -->
			<p class="mt-8 text-center">Need an account? <a href="#"
					class="text-blue-500 hover:text-blue-700 font-semibold">Create an
					account</a></p>


		</div>
	</div>

</section>

@endsection


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