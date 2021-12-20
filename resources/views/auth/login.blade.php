{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> --}}
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@extends('layouts.index')
@section('content')

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
			
			<!-- form -->
			<form id="" action="{{ route('login') }}" method="post" style="display: block;">
				@csrf
				<div class="p-2">
					<input type="email" name="email" id="email" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Email" value="" autofocus autocomplete>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
				<div class="p-2">
					<input type="password" name="password" id="password" tabindex="2"
					class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
					focus:bg-white focus:outline-none" placeholder="Mật khẩu">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="p-2">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
				<div class="p-2 text-center">
					<button type="submit" class="w-48 bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
					px-2 py-3 mt-4">{{ __('Login') }}</button>
				</div>
				<div class="p-2 text center">
					@if (Route::has('register'))
						Bạn chưa có tài khoản? Hãy
                        <a class="text-blue-500" href="{{ route('register') }}">
                             {{ __('Đăng ký') }}
                        </a>
                    @endif
				</div>
				<div class="p-2 text center">
					@if (Route::has('password.request'))
                        <a class="text-blue-500" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
				</div>
			</form>
		</div>
	</div>

</section>

@endsection