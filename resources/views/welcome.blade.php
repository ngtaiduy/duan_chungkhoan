@extends('layouts.index')
@section('content')
{{-- <div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        <span class="text-sm text-gray-700 dark:text-gray-500">Xin chào, <a
                href="{{ route('user.detail', ['id' => Auth::user()->id]) }}"
                class="text-sm text-gray-700 dark:text-gray-500 underline">{{Auth::user()->name}}</a></span>
        <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Đăng xuất</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Đăng nhập</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Đăng ký</a>
        @endif
        @endauth
    </div>
    @endif

</div> --}}
<div>

</div>


@endsection