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

			<h1 class="text-xl md:text-2xl font-bold leading-tight p-4 text-center">{{ __('Quên mật khẩu') }}</h1>
			@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
			<!-- form -->
			<form id="" action="{{ route('password.update') }}" method="post" style="display: block;">
				@csrf
                <input type="hidden" name="token" value="{{ $token }}">
				<div class="p-2">
					<input type="email" name="email" id="email" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Nhập Email" value="{{ old('email') }}" autofocus autocomplete>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="p-2">
					<input type="password" name="password" id="password" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Nhập Password" value="">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="p-2">
					<input type="password" name="password_confirmation" id="password-confirm" tabindex="1" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
						placeholder="Nhập lại Password" value="">
                </div>
				<div class="p-2 text-center">
					<button type="submit" class="w-48 bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
					px-2 py-3 mt-4">{{ __('Đổi mật khẩu') }}</button>
				</div>
			</form>
		</div>
	</div>

</section>

@endsection